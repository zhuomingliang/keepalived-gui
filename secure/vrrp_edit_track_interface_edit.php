<?php
        $edit_action = $_GET['edit_action'];
        $selected_host = $_GET['selected_host'];
        $selected = $_GET['selected'];
	if ($edit_action == "CANCEL") {
		header("Location: vrrp_edit_track_interface.php?selected_host=$selected_host&selected=$selected");		
		exit;
	}
	
	/* try and make this page non cacheable */
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");             // Date in the past
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified
	header("Cache-Control: no-cache, must-revalidate");           // HTTP/1.1
	header("Pragma: no-cache");                                   // HTTP/1.0
	global $vrrp_instance;

	require('parse.php');


		
	if ($edit_action == "ACCEPT") {

		$interface	=	$_GET['interface'];
		$vrrp_instance[$selected_host]['track_interface'][$selected-1]		= "$interface";	
		echo $interface;

	}

?>
<HTML>
<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML Strict Level 3//EN">

<HEAD>
<TITLE>Piranha (Virtual servers - Editing virtual server - Editing real server)</TITLE>
<script language="javascript" type="text/javascript" src="jquery-1.11.0.js"></script>
<script language="javascript" type="text/javascript" src="jquery.validate.js"></script>
<script language="javascript" type="text/javascript" src="showhide_health_check.js"></script>
<script language="javascript" type="text/javascript" src="superez.js"></script>
<STYLE TYPE="text/css">


TD      {
        font-family: helvetica, sans-serif;
        }
TD.error { float: none; color: red; padding-left: .5em; vertical-align: top; }
        
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


</STYLE>

</HEAD>

<BODY BGCOLOR="#660000">

<TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="5">
	<TR BGCOLOR="#CC0000"> <TD CLASS="logo"> <B>KEEPALIVED</B> CONFIGURATION TOOL </TD>
	<TD ALIGN=right CLASS="logo">
	    <A HREF="introduction.html" CLASS="logolink">
            INTRODUCTION</A> | <A HREF="help.php" CLASS="logolink">
            HELP</A></TD>
	</TR>
</TABLE>

<TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="5">
        <TR>
                <TD>&nbsp;<BR><FONT SIZE="+2" COLOR="#CC0000">EDIT VRRP TRACK INTERFACE</FONT><BR>&nbsp;</TD>
        </TR>
</TABLE>


<TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="0"><TR><TD BGCOLOR="#FFFFFF">


<TABLE WIDTH="100%" BORDER="0" CELLSPACING="1" CELLPADDING="5">
        <TR BGCOLOR="#666666">
                <TD WIDTH="16.66%" ALIGN="CENTER"> <A HREF="control.php" NAME="Control/Monitoring" CLASS="taboff"><B>CONTROL/MONITORING</B></A> </TD>
                <TD WIDTH="16.66%" ALIGN="CENTER"> <A HREF="global_settings.php" NAME="Global Settings" CLASS="taboff"><B>GLOBAL SETTINGS</B></A> </TD>
                <TD WIDTH="16.66%" ALIGN="CENTER"> <A HREF="vrrp_main.php" NAME="VRRP instance" CLASS="taboff"><B>VRRP INSTANCE</B></A> </TD>
                <TD WIDTH="16.66%" ALIGN="CENTER" > <A HREF="virtual_main.php" NAME="Virtual" CLASS="taboff"><B>VIRTUAL SERVERS</B></A> </TD>

        </TR>
</TABLE>
<?php
	// echo "Query = $QUERY_STRING";

?>


<TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="5">
        <TR BGCOLOR="#EEEEEE">
                <TD WIDTH="60%">EDIT:
		
		<A HREF="vrrp_edit_vrrp.php<?php if (!empty($selected_host)) { echo "?selected_host=$selected_host"; } ?> " NAME="VRRP INSTANCE">VRRP INSTANCE</A>
		&nbsp;|&nbsp;

                <A HREF="vrrp_edit_virtual_ipaddress.php<?php if (!empty($selected_host)) { echo "?selected_host=$selected_host"; } ?> " CLASS="tabon" NAME="VRRP VIRTUAL IPADDRESS">VRRP VIRTUAL IPADDRESS</A>
		&nbsp;|&nbsp;

                <A HREF="vrrp_edit_virtual_routes.php<?php if (!empty($selected_host)) { echo "?selected_host=$selected_host"; } ?> " NAME="VRRP VIRTUAL ROUTES">VRRP VIRTUAL ROUTES</A>
		&nbsp;|&nbsp;

                <A HREF="vrrp_edit_track_interface.php<?php if (!empty($selected_host)) { echo "?selected_host=$selected_host"; } ?> " NAME="VRRP TRACK INTERFACE">VRRP TRACK INTERFACE</A>
                &nbsp;|&nbsp;

		</TD>
		<!-- <TD WIDTH="30%" ALIGN="RIGHT"><A HREF="virtual_main.php">MAIN PAGE</A></TD> -->
        </TR>
</TABLE>

<P>


<FORM id="vrrp_track_interface_form" METHOD="GET" ENCTYPE="application/x-www-form-urlencoded" ACTION="vrrp_edit_track_interface_edit.php">


	<TABLE>

	<?php	
		$interface =  $vrrp_instance[$selected_host]['track_interface'][$selected-1];

		echo "<TR>";
			echo "<TD>INTERFACE: </TD>";
			echo "<TD><INPUT TYPE=TEXT NAME=interface VALUE=\""; echo $interface . "\""  . ">"; echo "</TD>";
		echo "</TR>";

	echo "</TABLE>";

	
		/* Welcome to the magic show */
		echo "<INPUT TYPE=HIDDEN NAME=selected_host VALUE=$selected_host>";
		echo "<INPUT TYPE=HIDDEN NAME=selected VALUE=$selected >";
	?>
<P>

<TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="5">
		<TR BGCOLOR="#666666">
			<TD><INPUT TYPE="SUBMIT" NAME="edit_action" VALUE="ACCEPT"></TD>
			<TD ALIGN=right><INPUT TYPE="SUBMIT" NAME="edit_action" VALUE="CANCEL"></TD>
		</TR>
</TABLE>
<?php open_file ("w+"); write_config(""); ?>
</FORM>
</TD></TR></TABLE>
</BODY>
</HTML>