<?php
	$selected_host = "";
	$selected = "";
	
	if (isset($_GET['selected_host'])) {
		$selected_host = $_GET['selected_host'];
	}

	if (isset($_GET['selected'])) {
		$selected = $_GET['selected'];
	}

	if ((isset($_GET['vrrp_sync_group_group'])) && ($_GET['vrrp_sync_group_group'] == "CANCEL")) {
		/* Redirect browser to editing page */
		header("Location: vrrp_sync_group_edit_vrrp.php?selected_host=$selected_host");
		/* Make sure that code below does not get executed when we redirect. */
		exit;
	}

	/* Some magic used to allow the edit command to pull up another web page */
	if ((isset($_GET['vrrp_sync_group_group'])) && ($_GET['vrrp_sync_group_group'] == "EDIT")) {
		/* Redirect browser to editing page */
		header("Location: vrrp_sync_group_edit_group_edit.php?selected_host=$selected_host&selected=$selected");
		/* Make sure that code below does not get executed when we redirect. */
		exit;
	}
	
	/* try and make this page non cacheable */
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");             // Date in the past
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified
	header("Cache-Control: no-cache, must-revalidate");           // HTTP/1.1
	header("Pragma: no-cache");                                   // HTTP/1.0
	
	require('parse.php');

	if ((isset($_GET['vrrp_sync_group_group'])) && ($_GET['vrrp_sync_group_group'] == "ADD")) {
		add_vrrp_sync_group_group($selected_host);
	}

	if ((isset($_GET['vrrp_sync_group_group'])) && ($_GET['vrrp_sync_group_group'] == "DELETE")) {
		$delete_service = "vrrp_sync_group_group";
		if ($debug) { echo "About to delete entry number $selected_host<BR>"; }
		echo "<HR><H2>Click <A HREF=\"vrrp_sync_group_edit_group.php?selected_host=$selected_host\" NAME=\"Virtual\">HERE</A></TD> for refresh</H2><HR>";
		open_file("w+");
		write_config("2", $selected_host, $selected-1, $delete_service);
		exit;
	}


	/* Umm,... just in case someone is dumb enuf to fiddle */
	if (empty($selected_host)) { $selected_host=1; }

?>
<HTML>
<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML Strict Level 3//EN">

<HEAD>
<TITLE>Piranha (Virtual Servers - Editing real server)</TITLE>
<STYLE TYPE="text/css">
<!-- 

TD      {
        font-family: helvetica, sans-serif;
        }
        
.logo   {
        color: #FFFFFF;
        }
        
A.logolink      {
        color: #FFFFFF;
        font-size: .8em;
        }
        
.taboff {
        color: #FFFFFF;
        }
        
.tabon  {
        color: #999999;
        }
        
.title  {
        font-size: .8em;
        font-weight: bold;
        color: #660000;
        }
        
.smtext {
        font-size: .8em;
        }
        
.green  {
        color: 

// -->
</STYLE>

</HEAD>

<BODY BGCOLOR="#660000">

<?php include 'name.php'; ?>

<TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="5">
        <TR>
                <TD>&nbsp;<BR><FONT SIZE="+2" COLOR="#CC0000">EDIT VRRP SYNC GROUP GROUP</FONT><BR>&nbsp;</TD>
        </TR>
</TABLE>


<TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="0"><TR><TD BGCOLOR="#FFFFFF">

<?php include 'menu.php'; ?>

<?php
	// echo "Query = $QUERY_STRING";

?>

<TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="5">
        <TR BGCOLOR="#EEEEEE">
                <TD WIDTH="60%">EDIT:
		
		<A HREF="vrrp_sync_group_edit_vrrp.php<?php if (!empty($selected_host)) { echo "?selected_host=$selected_host"; } ?> " NAME="VRRP SYNC GROUP">VRRP SYNC GROUP</A>
		&nbsp;|&nbsp;

                <A HREF="vrrp_sync_group_edit_group.php<?php if (!empty($selected_host)) { echo "?selected_host=$selected_host"; } ?> " NAME="VRRP SYNC GROUP GROUP">VRRP SYNC GROUP GROUP</A>
                &nbsp;|&nbsp;

		</TD>

		<!-- <TD WIDTH="30%" ALIGN="RIGHT"><A HREF="virtual_main.php">MAIN PAGE</A></TD> -->
        </TR>
</TABLE>

<P>

<FORM METHOD="GET" ENCTYPE="application/x-www-form-urlencoded" ACTION="vrrp_sync_group_edit_group.php">

<TABLE WIDTH="70%" BORDER="0" CELLSPACING="1" CELLPADDING="5">
	<TR>
		<TD CLASS="title">&nbsp;</TD>
		<TD CLASS="title">GROUP</TD>
	</TR>

<!-- Somehow dynamically generated here -->
	

	<?php
	/* magic */
	echo "<INPUT TYPE=HIDDEN NAME=vrrp VALUE=$selected_host>";

	$loop=1;

	foreach ($vrrp_sync_group[$selected_host]['group'] as $group) {
		echo "<TR>";
		echo "<TD><INPUT TYPE=RADIO NAME=selected VALUE=" . $loop; if ($selected == "" ) { $selected = 1; }; if ($loop == $selected) { echo " CHECKED"; }; echo "></TD>";

		echo "<TD><INPUT TYPE=HIDDEN NAME=group COLS=6 VALUE=";	echo $group	. ">";
		echo $group	. "</TD>";

		echo "</TR>";
	
	$loop++;
	}
	echo "</TABLE>";

	?>
	

<!-- end of dynamic generation -->



<!-- should align beside the above table -->

<TABLE>
		<TR>
			<TD><INPUT TYPE="SUBMIT" NAME="vrrp_sync_group_group" VALUE="ADD"></TD>
			<TD><INPUT TYPE="SUBMIT" NAME="vrrp_sync_group_group" VALUE="DELETE"></TD>
			<TD><INPUT TYPE="SUBMIT" NAME="vrrp_sync_group_group" VALUE="EDIT"></TD>
		</TR>
</TABLE>


<?php echo "<INPUT TYPE=HIDDEN NAME=selected_host VALUE=$selected_host>" ?>

	<TABLE WIDTH="100%" BORDER="0" CELLSPACING="1" CELLPADDING="5" BGCOLOR="#666666"> 
		<TR> 
			<TD ALIGN="right">
				<INPUT TYPE="SUBMIT" NAME="vrrp_sync_group_group" VALUE="CANCEL">
			</TD>
		</TR>
	</TABLE>


<?php open_file ("w+"); write_config(""); ?>

</FORM>
</TD> </TR> </TABLE>
</BODY>
</HTML>
