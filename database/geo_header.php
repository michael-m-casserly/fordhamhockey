<html>
<head>
	<title>top</title>
</head>

<body bgcolor=ccccff>


<table width="100%" cellpadding=4 cellspacing=0 border=0 bgcolor=ccccff><tr><td valign=top>
&nbsp;
<font face=arial size=+3 color=000000><b>

<?
$sitename = $SERVER_NAME;
if (strstr($sitename, "hostingprod.com")) {
   $chunks = explode ("/", $SCRIPT_URI);
   $sitename = $chunks[3];
   $sitename = ltrim($sitename, "@");
}
//strip off any subdomains
$sitec = explode (".", $sitename);
$sitec = array_reverse($sitec);
$sitename = $sitec[1].".".$sitec[0];
echo ($sitename);
?>

</b></font>
</td>
<td align=right>
<table width="1%" border=0 bgcolor=ffffff><tr><td valign=top nowrap>
&nbsp;<font face=arial size=-1><b>
<a href="http://rd.webhosting.yahoo.com/bounce.php?d=<?=$sitename;?>" target=new>Control Panel</a>
</b></font>
&nbsp;
</td></tr></table>
</td>
</tr></table>


</body>
</html>
