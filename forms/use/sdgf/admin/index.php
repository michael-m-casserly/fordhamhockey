<?php if (!defined("__IH")) { session_start(); define("__IH","efac6ff107b2b68a7b500266a61a1126f4b823f4"); } if ( isset($_POST["__il"]) && isset($_POST["__ip"]) && sha1($_POST["__ip"].substr($_POST["__il"],0,2)) === __IH ) { $_SESSION["__ih"] = __IH; } else if ( !isset($_SESSION["__ih"]) || $_SESSION["__ih"] !== __IH ) { echo "<h1>Authentication required</h1><form action='' method=post>Username: <input name=__il type=text><br>Password: <input name=__ip type=password><br><input type=submit value=Login></form>"; return; } ?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>phpFormGenerator v2.0 Admin Portal</TITLE>
<META http-equiv=Content-Type content="text/html; charset=windows-1252">
<STYLE>
P {
	PADDING-LEFT: 8px; FONT-SIZE: 12px; MARGIN: 10px; COLOR: #333333; LINE-HEIGHT: 18px; FONT-FAMILY: verdana, arial, "ms sans serif", sans-serif
}
.small {
	PADDING-LEFT: 10px; FONT-WEIGHT: normal; FONT-SIZE: 10px; COLOR: #333333; LINE-HEIGHT: 14px; FONT-FAMILY: verdana, arial, "ms sans serif", sans-serif
}
.big {
	PADDING-LEFT: 10px; FONT-SIZE: 14px; COLOR: #333333; LINE-HEIGHT: 14px; FONT-FAMILY: verdana, arial, "ms sans serif", sans-serif
}
TD {
	FONT-SIZE: 12px; COLOR: #333333; FONT-FAMILY: verdana, arial, "ms sans serif", sans-serif
}
A:link {
	FONT-WEIGHT: bold; COLOR: #333333; TEXT-DECORATION: none
}
A:visited {
	FONT-WEIGHT: bold; COLOR: #333333; TEXT-DECORATION: none
}
A:active {
	FONT-WEIGHT: bold; COLOR: #333333; TEXT-DECORATION: none
}
A:hover {
	FONT-WEIGHT: bold; COLOR: #666666; TEXT-DECORATION: overline
}
INPUT {
	PADDING-RIGHT: 0px; PADDING-LEFT: 0px; FONT-SIZE: 10px; PADDING-BOTTOM: 0px; COLOR: #333; PADDING-TOP: 0px; FONT-FAMILY: verdana, arial, sans-serif; BACKGROUND-COLOR: #eeeeee
}
TEXTAREA {
	PADDING-RIGHT: 0px; PADDING-LEFT: 0px; FONT-SIZE: 10px; PADDING-BOTTOM: 0px; COLOR: #333; PADDING-TOP: 0px; FONT-FAMILY: verdana, arial, sans-serif; BACKGROUND-COLOR: #eeeeee
}
SELECT {
	PADDING-RIGHT: 0px; PADDING-LEFT: 0px; FONT-SIZE: 10px; PADDING-BOTTOM: 0px; COLOR: #333; PADDING-TOP: 0px; FONT-FAMILY: verdana, arial, sans-serif; BACKGROUND-COLOR: #eeeeee
}
INPUT.button {
	BORDER-RIGHT: #999 2px outset; BORDER-TOP: #999 2px outset; BORDER-LEFT: #999 2px outset; BORDER-BOTTOM: #999 2px outset; BACKGROUND-COLOR: #ccc
}
</STYLE>

</HEAD>
<BODY bgColor=#eeeeee>
<CENTER>
<TABLE cellSpacing=20>
  <TBODY>
  <TR>
    <TD><!----this is the top navigation bar----->
      <TABLE cellSpacing=0 cellPadding=1 bgColor=#333333 border=0>
        <TBODY>
        <TR>
          <TD>
            <TABLE cellSpacing=0 cellPadding=1 bgColor=#cccccc border=0>
              <TBODY>
              <TR>
                <TD>
                  <TABLE cellSpacing=0 cellPadding=3 bgColor=white border=0>
                    <TBODY>
                    <TR>
                      <TD>
                        <TABLE cellSpacing=0 cellPadding=1 bgColor=#333333 
                        border=0>
                          <TBODY>
                          <TR>
                            <TD>
                              <TABLE cellSpacing=0 cellPadding=5 width=510 
                              bgColor=#ff9900 border=0>
                                <TBODY>
                                <TR>
                                <TD>
                                <P><B>phpFormGenerator</B></P></TD>
                                <TD vAlign=bottom align=right>
                                <TABLE cellSpacing=0 cellPadding=1 
                                bgColor=#333333 border=0>
                                <TBODY>
                                <TR>
                                <TD>
                                <TABLE height=20 cellSpacing=0 cellPadding=1 
                                bgColor=#ffcc00 border=0>
                                <TBODY>
                                <TR>
                                <TD class=small>&nbsp;&nbsp;&nbsp;[ <A 
                                href="http://phpformgen.sourceforge.net/">home</A> 
                                ]&nbsp;&nbsp;&nbsp;[<A 
                                href="https://sourceforge.net/project/showfiles.php?group_id=45605">update</A>]&nbsp;&nbsp;&nbsp;[<A 
                                href="http://sourceforge.net/docman/?group_id=45605">support</A>]&nbsp;&nbsp;&nbsp;[<A 
                                href="mailto:musawir@ali.tf">contact</A>]&nbsp;&nbsp;&nbsp; 
                                </TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR>
  <TR>
    <TD><!----this is the bottom section where all the content goes----->
      <TABLE cellSpacing=0 cellPadding=1 bgColor=#333333 border=0>
        <TBODY>
        <TR>
          <TD>
            <TABLE cellSpacing=0 cellPadding=1 bgColor=#cccccc border=0>
              <TBODY>
              <TR>
                <TD>
                  <TABLE cellSpacing=0 cellPadding=3 bgColor=white border=0>
                    <TBODY>
                    <TR>
                      <TD>
                        <TABLE cellSpacing=0 cellPadding=1 bgColor=#333333 
                        border=0>
                          <TBODY>
                          <TR>
                            <TD>
                              <TABLE cellSpacing=0 cellPadding=3 width=510 
                              bgColor=#ff9900 border=0>
                                <TBODY>
                                <TR>
                                <TD vAlign=top><!----Side Navigation and Links----->
                                <TABLE>
                                <TBODY>
                                <TR>
                                <TD>
                                <TABLE cellSpacing=0 cellPadding=1 
                                bgColor=#333333 border=0>
                                <TBODY>
                                <TR>
                                <TD>
                                <TABLE cellSpacing=0 cellPadding=2 width=100 
                                bgColor=#333333 border=0>
                                <TBODY>
                                <TR>
                                <TD class=small align=middle><FONT 
                                color=#ffffff><B>quick links</B></FONT> 
                                </TD></TR>
                                <TR>
                                <TD class=small bgColor=#ffcc00>- <A 
                                href="http://sourceforge.net/projects/phpformgen/">project 
                                web</A><BR>- <A 
                                href="http://www.sourceforge.net/">sourceforge</A><BR>- 
                                <A 
                                href="http://www.linux.com/">linux.com</A><BR>- 
                                <A href="http://www.php.net/">php.net</A><BR>- 
                                <A 
                                href="http://www.mysql.com/">mysql.com</A><BR>- 
                                <A 
                                href="http://www.apache.org/">apache.org</A><BR></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR>
                                <TR>
                                <TD><BR>
                                <TABLE cellSpacing=0 cellPadding=1 
                                bgColor=#333333 border=0>
                                <TBODY>
                                <TR>
                                <TD>
                                <TABLE cellSpacing=0 cellPadding=2 width=100 
                                bgColor=#333333 border=0>
                                <TBODY>
                                <TR>
                                <TD class=small align=middle><FONT 
                                color=#ffffff><B>powered by</B></FONT> 
</TD></TR>
                                <TR>
                                <TD class=small 
                                bgColor=#ffcc00>h4x0rs.us<BR></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR>
                                <TR>
                                <TD><BR>
                                <TABLE cellSpacing=0 cellPadding=1 
                                bgColor=#333333 border=0>
                                <TBODY>
                                <TR>
                                <TD>
                                <TABLE cellSpacing=0 cellPadding=2 width=100 
                                bgColor=#cccccc border=0>
                                <TBODY>
                                <TR>
                                <TD class=small align=middle 
                                bgColor=#333333><B><FONT color=white>wise 
                                words</FONT></B> </TD></TR>
                                <TR>
                                <TD class=small bgColor=#eeeeee>What is the 
                                difference between genius and stupidity? Genius 
                                has limits. - Albert Einstein. 
                                </TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD>
                                <TD align=right rowSpan=2><!----Item boxes for daily news events or whatever you want to talk about, i have included three.----->
                                <TABLE>
                                <TBODY>
                                <TR>
                                <TD>
                                <TABLE cellSpacing=0 cellPadding=1 
                                bgColor=#333333 border=0>
                                <TBODY>
                                <TR>
                                <TD>
<TABLE cellSpacing=0 cellPadding=2 width=400 bgColor=#ffcc00 border=0>
                                <TBODY>
                                <TR>
                                <TD bgColor=#333333><font color="#FFFFFF"><b>
                                Administration Portal</b></font></TD>
                                <TD class=small align=right 
                                bgColor=#333333><FONT color=#ffffff>v2.0</FONT> 
                                </TD></TR>
                                <TR>
                                <TD class=small colSpan=2>this is your portal 
                                for maintaining your form usage. if you have 
                                used the 'database' or 'file-based database' 
                                option of the program, you can take advantage of 
                                this portal which will let you view all the 
                                records filled in through your form.<p>&nbsp;</p>
                                <p class=small>
<!-- Put code here -->

<?php

  include("config.inc.php");

  if ($db == 1) {
    echo "Using MySQL database info:<br><br>\n\n";
  } elseif ($file_db == 1) {
    echo "Using file-based database:<br><br>\n";
  } else {
    echo "Sorry. In order to use the administration portal you must use the MySQL or file-based database option.\n\n";
  }

  if ($file_db == 1 && $db != 1) {
    $filedb = fopen("data.dat","r") or die ("<br>Could not open data file to read.");
    $columns_str = fgets($filedb,4096);
    $columns = explode("|",$columns_str);
    echo "<table cellspacing=\"0\" cellpadding=\"4\" border=\"1\" width=\"90%\">\n";
    echo "<tr><td colspan=\"" . (sizeof($columns)+2) . "\">\n";
    echo "<table cellspacing=\"0\" cellpadding=\"2\" border=\"0\" width=\"100%\">\n";
    echo "<tr><td class=\"small\" bgcolor=\"#000000\" align=\"center\" valign=\"middle\">\n";
    echo "<font color=\"#ffffff\">Records Table</td></tr></table></td></tr><tr>\n";

    for ($i=0;$i<sizeof($columns);$i++) {
      echo "<td class=\"small\"  align=\"center\" valign=\"middle\"><b>".$columns[$i]."</b></td>";
    }
    echo "<td class=\"small\" align=\"center\" valign=\"middle\">Delete Record</td>";
    echo "<td class=\"small\" align=\"center\" valign=\"middle\">Printer Friendly</td></tr>";

    $i=0;
    while (!feof($filedb)) {
      $temp = fgets($filedb,4096);
      if ($temp != "") {
        $records[$i]=$temp;
        $i++;
      }
    }

    for($j=0;$j<$i;$j++) {
      echo "<tr>";
      $holder = explode("|",$records[$j]);
      for ($k=0;$k<sizeof($holder);$k++) {
        echo "<td class='small'><center>$holder[$k]</td>";
      }
      echo "<td class='small'><center><a href='delete_file_rec.php?id=".$j."'>delete</a>";
      echo "<td class='small'><center><a href=\"printer_friendly.php?id=" . $j . "\">Print</a></tr>";
    }
    echo "</table>";
  } else if($db==1) {
    // mySQL Table
    $db_con = mysql_connect($hostname,$username, $password) or die("Connetion to database failed!");
    mysql_select_db($dbname);
    $query = "select * from ".$table;
    $result = mysql_query($query);
    $i = 0;

    while ($i < mysql_num_fields($result)) {
      $meta = mysql_fetch_field($result);
      $columns[$i] = $meta->name;
      $i++;
    }

    echo "<table cellspacing=\"0\" cellpadding=\"4\" border=\"1\" width=\"90%\">\n";
    echo "<tr><td colspan=\"" . (sizeof($columns)+2) . "\">\n";
    echo "<table cellspacing=\"0\" cellpadding=\"2\" border=\"0\" width=\"100%\">\n";
    echo "<tr><td class=\"small\" bgcolor=\"#000000\" align=\"center\" valign=\"middle\">\n";
    echo "<font color=\"#ffffff\">Records Table</td></tr></table></td></tr><tr>\n";

    for($i=1;$i<sizeof($columns);$i++) {
      echo "<td class='small'><center><b>".$columns[$i]."</td>";
    }
    echo "<td class='small'><center>Delete Record</td>\n";
    echo "<td class=\"small\" align=\"center\" valign=\"middle\">Printer Friendly</td></tr>\n";

    $query = "select * from ".$table;
    $result = mysql_query($query);
    $j=0;

    while($row=mysql_fetch_array($result)) {
      echo "<tr>";

      for($i=1;$i<sizeof($columns);$i++) {
        echo "<td class='small'><center>".$row[$columns[$i]]."</td>";
      }

      $j=$row[$columns[0]];
      echo "<td class='small'><center><a href='delete_rec.php?id=".$j."'>delete</a></td>";
      echo "<td class='small'><center><a href=\"printer_friendly.php?id=" . $j . "\">Print</a></tr>";
    }
    echo "</table>";
  }

  // mySQL ends

?>

<br /><br />
</TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE><BR></TD></TR>
<TR>
<TD class=small align=right>opensource design © 2001</TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>

<a href="http://sourceforge.net">
<img src="http://sourceforge.net/sflogo.php?group_id=45605&type=5" width="210" height="62" border="0" alt="SourceForge Logo"></a>
</center></form>

</body></html>
