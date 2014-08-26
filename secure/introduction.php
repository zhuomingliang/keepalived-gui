<HTML>
<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML Strict Level 3//EN">

<HEAD>
<TITLE>Piranha (Introduction)</TITLE>
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

<TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="5">
	<TR BGCOLOR="#CC0000"> <TD CLASS="logo"> <B>KEEPALIVED</B> CONFIGURATION TOOL </TD>
	<TD ALIGN=right CLASS="logo">
	   <A HREF="introduction.php" CLASS="logolink">
           INTRODUCTION</A> | <A HREF="help.php" CLASS="logolink">
           HELP</A></TD>
	</TR>
</TABLE>

<TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="5">
        <TR>
                <TD>&nbsp;<BR><FONT SIZE="+2" COLOR="#CC0000">
                INTRODUCTION</FONT><BR>&nbsp;</TD>
        </TR>
</TABLE>

<TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="0"><TR><TD BGCOLOR="#FFFFFF">

<?php include 'menu.php'; ?>

<P>
<SPAN CLASS=title> ABOUT THIS TOOL </SPAN>
<P>
 This is a GUI configuration tool forked from Piranha and used to set up, monitor and administer your LVS cluster through keepalived configuration
<P>
<SPAN CLASS=title>OPTIONS</SPAN>
<P>
<FONT COLOR="#660000">Control/Monitoring:</FONT> The initially highlighted tab. Used to monitor the cluster daemons and the runtime status.<P>
<FONT COLOR="#660000">Global Settings:</FONT> Used to set the IP address of the primary LVS router and NAT router.<P>
<FONT COLOR="#660000">Static IPaddress:</FONT> Used to set keepalived static ip addresses.<P>
<FONT COLOR="#660000">Redundancy:</FONT> Used to set the address of the backup LVS router and set the heartbeating parameters.<P>
<FONT COLOR="#660000">Virtual Servers:</FONT> Used to set service addresses and set up routing between the service addresses and real Web/FTP server hosts.<P>
<P>
<SPAN CLASS=title>RESOURCES</SPAN>
<P>
<TABLE BORDER="0" CELLSPACING="0" width=90%>
	<TR>
		<TD WIDTH=10% align=center><A HREF="help.php">Help</A> </TR>
		<TD WIDTH=10% align=center><A HREF="mailto:vincent.mc.li@gmail.com">Vincent Li</A></TR>
<!--		<TD WIDTH=10% align=center><A HREF="http://ha.redhat.com">Piranha Project</A> </TR>
-->
		<TD WIDTH=10% align=center><A HREF="http://www.linuxvirtualserver.org/">The Linux Virtual Server Project</A> </TR>
	</TR>
</TABLE>
<P>
<SPAN CLASS=title>AUTHORS</SPAN>
<BR>
<TABLE>
	<TR>
                <TD>&nbsp;&nbsp;</TD>
		<TD>Vincent Li</TD>
	</TR>
	<TR>
                <TD>&nbsp;&nbsp;</TD>
		<TD>Mike McLean</TD>
	</TR>
	<TR>
                <TD>&nbsp;&nbsp;</TD>
		<TD>Philip Copeland</TD>
	</TR>
	<TR>
                <TD>&nbsp;&nbsp;</TD>
		<TD>Tim Waugh</TD>
	</TR>	
	<TR>
                <TD>&nbsp;&nbsp;</TD>
		<TD>Keith Barrett</TD>
 	</TR>
 	<TR>
                <TD>&nbsp;&nbsp;</TD>
		<TD>Erik Troan</TD>
	</TR>
</TABLE>
<P>
<SPAN CLASS=title>CONTRIBUTORS</SPAN>
<TABLE>	
	<TR>
                <td>&nbsp;&nbsp;</td>
		<TD>Wensong Zhang</td>
                <td><A HREF="mailto:wensong@redhat.com">
                    &lt;wensong@redhat.com&gt;</A></TD>
        </TR><TR>
                <td>&nbsp;&nbsp;</td>
		<TD>Joseph Mack</td>
                <td><A HREF="mailto:jmack@wm7d.net">
                    &lt;jmack@wm7d.net&gt;</A></TD>
        </TR><TR>
                <td>&nbsp;&nbsp;</td>
		<TD>Yuri Volobuev</td>
                <td><A HREF="mailto:volobuev@t1.chem.umn.edu">
                    &lt;volobuev@t1.chem.umn.edu&gt;</A></TD>
        </TR><TR>
                <td>&nbsp;&nbsp;</td>
                <TD>Keith Moore</td>
                <td><A HREF="mailto:keith.moore@renp.com">
                    &lt;keith.moore@renp.com&gt;</A></TD>
        </TR><TR>
                <td>&nbsp;&nbsp;</td>
                <TD>Tinus Strauss</td>
                <td><A HREF="mailto:Tinus.Strauss@eskom.co.za">
                    &lt;Tinus.Strauss@eskom.co.za&gt;</A></TD>
        </TR><TR>
                <td>&nbsp;&nbsp;</td>
                <TD>Lars Kellogg-Stedman</td>
                <td><A HREF="mailto:lars@larsshack.org">
                    &lt;lars@larsshack.org&gt;</A></TD>
        </TR><TR>
                <td>&nbsp;&nbsp;</td>
		<TD>Mike Wangsmo</TD>
                <td></td>
	</TR>
</TABLE>
<P>
You could also browse through the maillist archives to check the old piranha
<BR>
<A HREF="https://listman.redhat.com/mailman/listinfo/piranha-list">https://listman.redhat.com/mailman/listinfo/piranha-list</A>
<P>
&nbsp;
</TD></TR></TABLE>
</BODY>
</HTML>
