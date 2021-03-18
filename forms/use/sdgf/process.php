<?php
include("global.inc.php");
$errors=0;
$error="The following errors occured while processing your form input.<ul>";
pt_register('POST','dfg');
pt_register('POST','ng');
pt_register('POST','dsfg');
if(!eregi("^[a-z0-9]+([_\\.-][a-z0-9]+)*" ."@"."([a-z0-9]+([\.-][a-z0-9]+)*)+"."\\.[a-z]{2,}"."$",$dfg)){
$error.="<li>Invalid email address entered";
$errors=1;
}
if($errors==1) echo $error;
else{
$where_form_is="http".($HTTP_SERVER_VARS["HTTPS"]=="on"?"s":"")."://".$SERVER_NAME.strrev(strstr(strrev($PHP_SELF),"/"));
$message="dfg: ".$dfg."
ng: ".$ng."
dsfg: ".$dsfg."
";
$message = stripslashes($message);
mail("dsf@asd.com","Form Submitted at your website",$message,"From: phpFormGenerator");
$make=fopen("admin/data.dat","a");
$to_put="";
$to_put .= $dfg."|".$ng."|".$dsfg."
";
fwrite($make,$to_put);
?>


<!-- This is the content of the Thank you page, be careful while changing it -->

<h2>Thank you!</h2>

<table width=50%>
<tr><td>dfg: </td><td> <?php echo $dfg; ?> </td></tr>
<tr><td>ng: </td><td> <?php echo $ng; ?> </td></tr>
<tr><td>dsfg: </td><td> <?php echo $dsfg; ?> </td></tr>
</table>
<!-- Do not change anything below this line -->

<?php 
}
?>