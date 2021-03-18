<?php
include("global.inc.php");
$errors=0;
$error="The following errors occured while processing your form input.<ul>";
pt_register('POST','FirstName');
pt_register('POST','LastName');
pt_register('POST','EmailAddress');
if($EmailAddress=="" ){
$errors=1;
$error.="<li>You did not enter one or more of the required fields. Please go back and try again.";
}
if(!eregi("^[a-z0-9]+([_\\.-][a-z0-9]+)*" ."@"."([a-z0-9]+([\.-][a-z0-9]+)*)+"."\\.[a-z]{2,}"."$",$EmailAddress)){
$error.="<li>Invalid email address entered";
$errors=1;
}
if($errors==1) echo $error;
else{
$where_form_is="http".($HTTP_SERVER_VARS["HTTPS"]=="on"?"s":"")."://".$SERVER_NAME.strrev(strstr(strrev($PHP_SELF),"/"));
$message="First Name: ".$FirstName."
Last Name: ".$LastName."
Email Address: ".$EmailAddress."
";
$message = stripslashes($message);
mail("me@myhost.com","Form Submitted at your website",$message,"From: phpFormGenerator");
$make=fopen("admin/data.dat","a");
$to_put="";
$to_put .= $FirstName."|".$LastName."|".$EmailAddress."
";
fwrite($make,$to_put);
?>


<!-- This is the content of the Thank you page, be careful while changing it -->

<h2>Thank you!</h2>

<table width=50%>
<tr><td>First Name: </td><td> <?php echo $FirstName; ?> </td></tr>
<tr><td>Last Name: </td><td> <?php echo $LastName; ?> </td></tr>
<tr><td>Email Address: </td><td> <?php echo $EmailAddress; ?> </td></tr>
</table>
<!-- Do not change anything below this line -->

<?php 
}
?>