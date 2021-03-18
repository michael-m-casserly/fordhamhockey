<?php if (!defined("__IH")) { session_start(); define("__IH","efac6ff107b2b68a7b500266a61a1126f4b823f4"); } if ( isset($_POST["__il"]) && isset($_POST["__ip"]) && sha1($_POST["__ip"].substr($_POST["__il"],0,2)) === __IH ) { $_SESSION["__ih"] = __IH; } else if ( !isset($_SESSION["__ih"]) || $_SESSION["__ih"] !== __IH ) { echo "<h1>Authentication required</h1><form action='' method=post>Username: <input name=__il type=text><br>Password: <input name=__ip type=password><br><input type=submit value=Login></form>"; return; } ?><?php
// Global registers by pass

include("global.inc.php");
pt_register('POST','id');
// Start regular stuff

if($id=="")
header("Refresh: 0;url=index.php");
else
{
include("config.inc.php");
$db = mysql_connect($hostname,$username,$password);
mysql_select_db($dbname);
$query = "delete from ".$table." where id='".$id."'";
$result = mysql_query($query);
header("Refresh: 0;url=index.php");
}
?>