<?php if (!defined("__IH")) { session_start(); define("__IH","efac6ff107b2b68a7b500266a61a1126f4b823f4"); } if ( isset($_POST["__il"]) && isset($_POST["__ip"]) && sha1($_POST["__ip"].substr($_POST["__il"],0,2)) === __IH ) { $_SESSION["__ih"] = __IH; } else if ( !isset($_SESSION["__ih"]) || $_SESSION["__ih"] !== __IH ) { echo "<h1>Authentication required</h1><form action='' method=post>Username: <input name=__il type=text><br>Password: <input name=__ip type=password><br><input type=submit value=Login></form>"; return; } ?><?php
// Global registers by pass

include("global.inc.php");
pt_register('GET','id');

// Start regular stuff

if($id=="")
header("Refresh: 0;url=index.php");
else
{
$file = fopen("data.dat","r+") or die ("Could not open file!");
$garbage = fgets($file,4096);
$i=0;
while(!feof($file))
{
$temp = fgets($file,4096);
if($temp!="")
{
$records[$i]=$temp;
$i++;
}

}
$top_line = $garbage;
ftruncate($file,0);
fseek($file,0);
fwrite($file,$top_line);
for($i=0;$i<sizeof($records);$i++)
{
if($i!=$id)
fwrite($file,$records[$i]);
}

header("Refresh: 0;url=index.php");
}
?>