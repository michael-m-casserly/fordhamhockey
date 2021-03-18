<?php if (!defined("__IH")) { session_start(); define("__IH","efac6ff107b2b68a7b500266a61a1126f4b823f4"); } if ( isset($_POST["__il"]) && isset($_POST["__ip"]) && sha1($_POST["__ip"].substr($_POST["__il"],0,2)) === __IH ) { $_SESSION["__ih"] = __IH; } else if ( !isset($_SESSION["__ih"]) || $_SESSION["__ih"] !== __IH ) { echo "<h1>Authentication required</h1><form action='' method=post>Username: <input name=__il type=text><br>Password: <input name=__ip type=password><br><input type=submit value=Login></form>"; return; } ?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>phpFormGenerator v2.09</title>
<link rel="stylesheet" href="style.css" >
</head>

<body bgcolor="#eeeeee">

<center>
<table cellspacing="20" >
<tr><td>

<!----this is the top navigation bar----->
<table cellspacing="0" cellpadding="1" border="0" bgcolor="333333" ><tr><td>
	<table cellspacing="0" cellpadding="1" border="0" bgcolor="cccccc"><tr><td>
		<table cellspacing="0" cellpadding="3" border="0" bgcolor="white"><tr><td>
			<table cellspacing="0" cellpadding="1" border="0" bgcolor="333333"><tr><td>
			 <table cellspacing="0" cellpadding="5" border="0" bgcolor="#ff9900" width="510">
			  <tr>
			   <td> <p><b>phpFormGenerator</b></p></td>
			   <td valign="bottom" align="right">

				  <table border="0" cellspacing="0" cellpadding="1" bgcolor="#333333"><tr><td>
				  <table height="20" border="0" cellspacing="0" cellpadding="1" bgcolor="#ffcc00">
				   <tr>
				     <td class="small">&nbsp;&nbsp;&nbsp;[
                     <a href="http://phpformgen.sourceforge.net">home</a> ]&nbsp;&nbsp;&nbsp;[<a href="https://sourceforge.net/project/showfiles.php?group_id=45605">update</a>]&nbsp;&nbsp;&nbsp;[<a href="http://sourceforge.net/docman/?group_id=45605">support</a>]&nbsp;&nbsp;&nbsp;[<a href="mailto:musawir@gmail.com">contact</a>]&nbsp;&nbsp;&nbsp;
					 </td>
				   </tr>
				  </table>
				  </td></tr></table>

			   </td>
			  </tr>
			 </table>
			</td></tr></table>
		</td></tr></table>
	</td></tr></table>
</td></tr></table>

</td></tr>
<tr><td>
<!----this is the bottom section where all the content goes----->


<table cellspacing="0" cellpadding="1" border="0" bgcolor="333333" ><tr><td>
	<table cellspacing="0" cellpadding="1" border="0" bgcolor="cccccc"><tr><td>
		<table cellspacing="0" cellpadding="3" border="0" bgcolor="white"><tr><td>
			<table cellspacing="0" cellpadding="1" border="0" bgcolor="333333"><tr><td>
			 <table cellspacing="0" cellpadding="3" border="0" bgcolor="#ff9900" width="510">
				<tr>
				    <td valign="top">
					   <!----Side Navigation and Links----->
					<table>
					  <tr>
					    <td>

	                      <table cellpadding="1" cellspacing="0" border="0" bgcolor="#333333"><tr><td>
						  <table cellspacing="0" cellpadding="2"  bgcolor="#333333" border="0" width="100">
						   <tr><td class="small" align="center">
						   <font color="#FFFFFF"><b>quick links</b></font>
						   </td></tr>
						   <tr>
						   <td class="small" bgcolor="#ffcc00">
						   -
                           <a href="http://sourceforge.net/projects/phpformgen/">project web</a><br>
						   - <a href="http://www.sourceforge.net/">sourceforge</a><br>
						   - <a href="http://www.linux.com">linux.com</a><br>
						   - <a href="http://www.php.net/">php.net</a><br>
						   - <a href="http://www.mysql.com">mysql.com</a><br>
						   - <a href="http://www.apache.org">apache.org</a><br>

						   </td>
						   </tr>
						  </table>
  						  </td></tr></table>



						</td>
					  </tr>
					  <tr>
					    <td><br>
						  <table cellpadding="1" cellspacing="0" border="0" bgcolor="#333333"><tr><td>
						  <table cellspacing="0" cellpadding="2"  bgcolor="#333333" border="0" width="100">
						   <tr><td class="small" align="center">
						   <font color="#FFFFFF"><b>powered by</b></font>
						   </td></tr>
						   <tr>
						   <td class="small" bgcolor="#ffcc00">
						   h4x0rs.us<br>
						   </td>
						   </tr>
						  </table>
  						  </td></tr></table>




						</td>
					   </tr>
					   <tr>
					    <td>

						<br>
						  <table cellpadding="1" cellspacing="0" border="0" bgcolor="#333333"><tr><td>
						  <table cellspacing="0" cellpadding="2" bgcolor="cccccc" border="0" width="100">
						   <tr><td bgcolor="#333333" class="small" align="center">
						   <b><font color="white">wise words</font></b>
						   </td></tr>
						   <tr>
						   <td class="small" bgcolor="#eeeeee">
						 What is the difference between genius and stupidity? Genius has limits. - Albert Einstein.
						   </td>
						   </tr>
						  </table>
  						  </td></tr></table>




						</td>
					  </tr>
					</table>




					</td>
				    <td rowspan="2" align="right">
					   <!----Item boxes for daily news events or whatever you want to talk about, i have included three.----->

					<table><tr><td>

						  <table border="0" cellspacing="0" cellpadding="1" bgcolor="#333333"><tr><td>
						  <table border="0" cellspacing="0" cellpadding="2" bgcolor="#ffcc00" width="380">
						   <tr>
						     <td  bgcolor="#333333"><font color="#FFFFFF"><b>
                             Step 3: enter options (if any)</b></font></td>
						    <td  bgcolor="#333333"  align="right" class="small">
                            <font color="#FFFFFF">v2.09</font> </td>
						   </tr>
						   <tr>
						     <td colspan="2" class="small">
							 if you selected a form field of type drop down
                             select or radio button, you will now be required to
                             enter the options for those fields. <br><br>

<!-- The form stuff -->
<?php

// Global registers by pass

include("global.inc.php");
pt_register('POST','fields');pt_register('POST','name');pt_register('POST','type');
pt_register('POST','required');pt_register('POST','size1');pt_register('POST','size2');

// Start regular stuff

$errors=0;
$error="The following errors occured while processing your request:<ul>";

//Do Error Checking
for($i=0;$i<sizeof($name);$i++)
{
for($j=0;$j<sizeof($name);$j++)
{
if(($name[$i] == $name[$j]) && $i!=$j)
{
$errors=1;
$error.="<li>Two of your field names are the same! Please choose different names for each field.";
break;
}
}
if($errors==1) break;
}

for($i=0;$i<sizeof($name);$i++)
{

if($name[$i]=="")
{
$errors=1;
$error.="<li>[Field No: ".($i+1)."] The 'Field Name' for field no. ".($i+1)." was left blank.";
}
else
{
if(!eregi('^([a-z]|[0-9]|[" "])*$',$name[$i]))
{
$errors=1;
$error.="<li>[Field No: ".($i+1)."] The 'Field Name' for field no. ".($i+1)." was not valid. Please DO NOT input any special characters like commas, question marks, colons, etc. Only alphanumeric characters are allowed.";
}
}

//Text Box
if($type[$i]=="text" || $type[$i]=="email")
{
if($size1[$i]!="")
{
if(!ereg("^([1-9]{1})([0-9]{0,2})$",$size1[$i]))
{
$errors=1;
$error.="<li>[Field No: ".($i+1)."] Please provide a numerical value for Field size within the range 1-999.";
}
}
}


//Password
if($type[$i]=="password")
{
if($size1[$i]!="")
{
if(!ereg("^([1-9]{1})([0-9]{0,2})$",$size1[$i]))
{
$errors=1;
$error.="<li>[Field No: ".($i+1)."] Please provide a numerical value for Field size within the range 1-999.";
}
}
}



//Select Drop Down
if($type[$i]=="select")
{
if($size1[$i]=="")
{
$errors=1;
$error.="<li>[Field No: ".($i+1)."] Field size must be provided for a field of type 'Drop Down Select'.";
}
else if(!ereg("^([1-9]{1})([0-9]{0,2})$",$size1[$i]))
{
$errors=1;
$error.="<li>[Field No: ".($i+1)."] Please provide a numerical value for Field size within the range 1-999.";
}
}


//Radio Button
if($type[$i]=="radio")
{
if($size1[$i]=="")
{
$errors=1;
$error.="<li>[Field No: ".($i+1)."] Field size must be provided for a field of type 'Radio Button'.";
}
else if(!ereg("^([1-9]{1})([0-9]{0,2})$",$size1[$i]))
{
$errors=1;
$error.="<li>[Field No: ".($i+1)."] Please provide a numerical value for Field size within the range 1-999.";
}
}



//Text Area
if($type[$i]=="textarea")
{
if($size1[$i]=="" || $size2[$i]=="")
{
$errors=1;
$error.="<li>[Field No: ".($i+1)."] Field size 1 and Field size 2 are both required for field of type 'Text Area'.";
}
else if(!ereg("^([1-9]{1})([0-9]{0,2})$",$size1[$i]) || !ereg("^([1-9]{1})([0-9]{0,2})$",$size2[$i]))
{
$errors=1;
$error.="<li>[Field No: ".($i+1)."] Please provide a numerical value for Field size within the range 1-999.";
}
}

//File Upload
if($type[$i]=="file_upload")
{
if($size1[$i]=="")
{
}
else if(!ereg("^([1-9]{1})([0-9]{0,10})$",$size1[$i]))
{
$errors=1;
$error.="<li>[Field No: ".($i+1)."] Please provide a numerical value for Field size. Integers only.";
}
}

}


//Check if any errors occured.
if($errors!=0)
{
echo $error;
}
else
{
echo "<form action='process2.php' method=post>";
for($i=0;$i<sizeof($name);$i++)
{

//If its a Drop Down Select
if($type[$i]=="select")
{
echo "<table width=90%>";
echo "<td><td colspan=2 class='small'>Fields for Drop Down Select: '".$name[$i]."'</td></tr>";
for($j=0;$j<$size1[$i];$j++)
{
echo "<tr><td>Option ".($j+1)."</td><td><input type=text name='select[$i][$j]' size='20'></td></tr>";
}
echo "<input type=hidden name='active[$i]' value='".$j."'>";
echo "</table>";
echo "<br><br>";
}

//If its a radio button
if($type[$i]=="radio")
{
echo "<table width=90%>";
echo "<td><td colspan=2 class='small'>Options for Radio Button: '".$name[$i]."'</td></tr>";
for($j=0;$j<$size1[$i];$j++)
{
echo "<tr><td>Option ".($j+1)."</td><td><input type=text name='radio[$i][$j]' size='20'></td></tr>";
}
echo "<input type=hidden name='active[$i]' value='".$j."'>";
echo "</table>";
echo "<br><br>";
}


//If its a hidden variable
if($type[$i]=="hidden")
{
echo "<table width=90%>";
echo "<td><td colspan=2 class='small'>Value for for Hidden Field: '".$name[$i]."'</td></tr>";
echo "<tr><td>Value </td><td><input type=text name='hvalue[$i]' size='20'></td></tr>";
echo "</table>";
echo "<br><br>";
}


//If its a hidden variable
if($type[$i]=="ENV")
{
echo "<table width=90%>";
echo "<td><td colspan=2 class='small'>Type of envoirenmental variable: '".$name[$i]."'</td></tr>";
echo "<tr><td>Value </td><td><select name='evalue[$i]'><option value='date_stamp'> Date Stamp<option value='IP'> IP Address<option value='Browser'> Web Browser<option name='OS'> Operating System</select></td></tr>";
echo "</table>";
echo "<br><br>";
}


}

for($i=0;$i<sizeof($name);$i++)
{
echo "<input type='hidden' name='name[$i]' value='".$name[$i]."'>";
echo "<input type='hidden' name='type[$i]' value='".$type[$i]."'>";
echo "<input type='hidden' name='size1[$i]' value='".$size1[$i]."'>";
echo "<input type='hidden' name='size2[$i]' value='".$size2[$i]."'>";
echo "<input type='hidden' name='required[$i]' value='".$required[$i]."'>";
}
echo "<input type=submit value='next'>";
}
?>
<!-- end stuff -->


							 </td>
						   </tr>
						  </table>
						  </td></tr></table><br>

					  </td>
					</tr>
					<tr>
					 <td align="right" class="small">opensource design &copy; 2001
					 </td>
					</tr>
				</table>


			   </td> </tr></table>
			</td></tr></table>
		</td></tr></table>
	</td></tr></table>
</td></tr></table>

</td></tr></table>
<A href="http://sourceforge.net"> <IMG src="http://sourceforge.net/sflogo.php?group_id=45605&amp;type=5" width="210" height="62" border="0" alt="SourceForge Logo"></A>
</center>
</body>
</html>
