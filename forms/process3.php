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
                             Step 5: generation status</b></font></td>
						    <td  bgcolor="#333333"  align="right" class="small">
                            <font color="#FFFFFF">v2.09</font> </td>
						   </tr>
						   <tr>
						     <td colspan="2" class="small">
							 thats it! now we're ready to generate your form. if
                             you encounter any errors, please make sure that you
                             provided the correct database information (if any),
                             and please maintain that everything is case
                             sensitive. also remember to give read+write
                             permissions to the forms directory (located under
                             the phpformgen directory). thank you.<br><br>

<!-- The form stuff -->

<?php

// Global registers by pass

include("global.inc.php");
pt_register('POST','fields');pt_register('POST','name');pt_register('POST','type');
pt_register('POST','required');pt_register('POST','size1');pt_register('POST','size2');
pt_register('POST','select');pt_register('POST','radio');pt_register('POST','active');
pt_register('POST','email');pt_register('POST','redirect');pt_register('POST','create_dat');
pt_register('POST','db');pt_register('POST','hostname');pt_register('POST','dbname');
pt_register('POST','dbuser');pt_register('POST','dbpass');pt_register('POST','new_table');
pt_register('POST','table_name');pt_register('POST','tab_name');pt_register('POST','column');
pt_register('POST','hvalue','evalue');pt_register('POST','gen_thank');
pt_register('POST','template_name');pt_register('POST','FormName');
// Start regular stuff

$errors=0;
$error="The following errors occured while processing your request:<ul>";

$form_name = "";
if($FormName=="")
{
$errors = 1;
$error.= "<li>You did not provide a form name.";
}
else
{
$form_name = "";
for($i=0;$i<strlen($FormName);$i++)
{
if($FormName[$i]!=' ')
$form_name .= $FormName[$i];
}

if(file_exists("use/".$form_name))
{
$errors = 1;
$error .= "<li>A directory called ".$form_name." already exists. Choose different form name.";
}

}

if($email=="")
{
//$errors=1;
$error.="<li>You did not provide an email address to send the form data to.";
}
else
{
if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@([0-9a-z](-?[0-9a-z])*\.)+[a-z]{2}([zmuvtg]|fo|me)?$",$email))
{
$errors=1;
$error.="<li>You did not provide a valid email address.";
}
}

if($redirect=="" && $gen_thank!="on")
{
$errors=1;
$error.="<li>You did not provide a thank you page URL to redirect the user to after he/she has filled the form. Please provide a URL or let phpFormGenerator generate a thank you page for you.";
}

//Check all db info
if($db=="yes")
{
if($hostname=="" || $dbname=="")
{
$errors=1;
$error.="<li>You did not enter hostname and/or database name.";
}

if($new_table=="yes")
{
if($table_name=="")
{
$errors=1;
$error.="<li>You did not enter the name of the table to be created.";
}
else
{
for($i=0;$i<sizeof($name);$i++)
{
if($column[$i]=="")
{
$errors=1;
$error.="<li>Column ".($i+1)." for field ".$name[$i]." was not entered.";
}
}
}
}
else
{
if($tab_name=="")
{
$errors=1;
$error.="<li>Table name to enter data to was not provided.";
}
else
{
for($i=0;$i<sizeof($name);$i++)
{
if($column[$i]=="")
{
$errors=1;
$error.="<li>Column ".($i+1)." for field ".$name[$i]." was not entered.";
}
}
}
}

}
else if($db=="")
{
$errors=1;
$error.="<li>Please choose either yes or no to whether you want to enter form data into a MySQL database table";
}


//Check if any errors actually existed
if($errors==1)
{
echo $error;
}
else
{

if($db=="yes")
{
if($new_table=="yes")
{
echo "Now creating table '".$table_name."' ...<br><br>";
$link = mysql_connect($hostname,$dbuser,$dbpass) or die("<br><br>Could not establish connection to MySQL database with the information provided.");
mysql_select_db($dbname,$link) or die ("<br><br>Could not access MySQL database with information provided.");

$query="CREATE TABLE ".$table_name." (id INT (10) UNSIGNED not null AUTO_INCREMENT,";
for($i=0;$i<sizeof($name);$i++)
{
$query.=" ".$column[$i]." TEXT not null ,";
}
$query.=" PRIMARY KEY (id), INDEX (id), UNIQUE (id)) comment = 'Created by phpFormGenerator'";

mysql_query($query) or die ("<br><br>Could not create MySQL database table. Maybe a table of the same name already exists?");
echo "<br>";
echo "Done!";
mysql_close($link);
$conf_file = fopen("forms/admin/config.inc.php","w") or die("<br><br>Could not open file to write. Please make sure your entire forms directory has read+write access.");
$conf_write = "<?php\n\$db=1;\n \$hostname=\"".$hostname."\";\n";
$conf_write .= "\$username = \"".$dbuser."\";\n";
$conf_write .= "\$password = \"".$dbpass."\";\n";
$conf_write .= "\$dbname = \"".$dbname."\";\n";
$conf_write .= "\$table = \"".$table_name."\";\n";
fwrite($conf_file,$conf_write);
fclose($conf_file);


}
else
{
echo "Now verifying MySQL database access information (some test data will be entered into the database table)...<br>";
$link = mysql_connect($hostname,$dbuser,$dbpass) or die("<br><br>Could not establish connection to MySQL database with the information provided.");
mysql_select_db($dbname,$link) or die ("<br><br>Could not access MySQL database with information provided.");
$query="insert into ".$tab_name." (";
for($i=0;$i<sizeof($name);$i++)
{
if($i==(sizeof($name)-1))
$query.=$column[$i];
else
$query.=$column[$i].",";
}
$query.=") values (";

for($i=0;$i<sizeof($name);$i++)
{
if($i==(sizeof($name)-1))
$query.="'test'";
else
$query.="'test',";
}
$query.=")";

mysql_query($query) or die ("<br><br>Database table does not exist, or columns entered are invalid.");

echo "<br>";
echo "Done!";
mysql_close($link);
$conf_file = fopen("forms/admin/config.inc.php","w") or die("<br><br>Could not open file to write. Please make sure your entire forms directory has read+write access.");
$conf_write = "<?php\n\$db=1;\n \$hostname=\"".$hostname."\";\n";
$conf_write .= "\$username = \"".$dbuser."\";\n";
$conf_write .= "\$password = \"".$dbpass."\";\n";
$conf_write .= "\$dbname = \"".$dbname."\";\n";
$conf_write .= "\$table = \"".$tab_name."\";\n";
fwrite($conf_file,$conf_write);
fclose($conf_file);
}
}

echo "<br><br>Ok, everything is fine.. generating form...";

for($i=0;$i<sizeof($name);$i++)
{
$use_name[$i] = $name[$i];
$use_name[$i] = ereg_replace(' ','',$use_name[$i]);
}


$form_content = "<form enctype='multipart/form-data' action='process.php' method='post'>\n";
$form_content .= "<table border=\"1\" cellspacing=\"1\" style=\"border-collapse: collapse\" bordercolor=\"#000066\" width=\"95%\" cellpadding=\"5\">\n";
$form_content .= "<tr>\n";
$form_content .= "<td colspan=\"3\" bgcolor=\"#B5CBEF\" height=\"17\" width=\"100%\" bordercolor=\"#FFFFFF\" background=\"tile_back.gif\">\n";
$form_content .= "<p align=\"left\>";
$form_content .= "<b>";
$form_content .= "<font face=\"Verdana\" size=\"2\" color=\"#FFFFFF\">";
$form_content .= "<img border=\"0\" src=\"nav_m.gif\" width=\"8\" height=\"8\">\n"; 
$form_content .= "<font face='Verdana' size=2 color='#FFFFFF'><b>\n";
$form_content .= "<!- You can add a form title here -->\n";
$form_content .= "&nbsp;\n</font><font face=\"Verdana\" size=\"2\" color=\"#000066\"> </font></b></td>\n";
$form_content .= "</tr>";
$form_content .= "<tr>";
$form_content .= "<td colspan=\"3\" bgcolor=\"#B5CBEF\" height=\"16\" width=\"100%\" bordercolor=\"#FFFFFF\" background=\"tile_sub.gif\">";
$form_content .= "<font size=\"2\" face=\"Verdana\">";
$form_content .= "<b>";
$form_content .= "<font face=\"Verdana\" size=\"2\" color=\"#000066\">\n";
$form_content .= "<!- You can add a brief form description here-->\n&nbsp;\n</font></b></font></td>";
$form_content .= "</tr><tr>";
$form_content .= "<td colspan=\"3\" bgcolor=\"#D6DFEF\" height=\"16\" width=\"100%\" bordercolor=\"#FFFFFF\">";
$form_content .= "<font size=\"1\" face=\"Verdana\">";
$form_content .= "Please fill in all fields marked with a *</font></td></tr>";


for($i=0;$i<sizeof($name);$i++)
{

if($type[$i]!="hidden" && $type[$i]!="ENV")
{
$form_content .= "<tr><td height=\"30\" width=\"55\" bgcolor=\"#EFF3F7\" bordercolor=\"#FFFFFF\">\n";
$form_content .= "<img border=\"0\" src=\"bc_new.gif\" width=\"28\" height=\"28\"></td>";
$form_content .= "<td height=\"30\" width=\"189\" bgcolor=\"#EFF3F7\" bordercolor=\"#FFFFFF\">\n";
$form_content .= "<font face=\"Verdana\" size=\"2\">".$name[$i]."</td>\n";
$form_content .= "<td height=\"30\" width=\"469\" bgcolor=\"#EFF3F7\" bordercolor=\"#FFFFFF\">\n";
$form_content .= "<font face=\"Verdana\">";
}

//Text Box and Check Box and Password
if($type[$i]=="text" || $type[$i]=="checkbox" || $type[$i]=="password")
{
if($size1[$i]=="")
$form_content .= "<input type=".$type[$i]." name='".$use_name[$i]."'>";
else if($size1[$i]!="" && $type[$i]!="checkbox")
$form_content .= "<input type=".$type[$i]." name='".$use_name[$i]."' size=".$size1[$i].">";
}

if($type[$i]=="email")
{
if($size1[$i]=="")
$form_content .= "<input type=text name='".$use_name[$i]."'>";
else if($size1[$i]!="")
$form_content .= "<input type=text name='".$use_name[$i]."' size=".$size1[$i].">";
}

if($type[$i]=="hidden")
{
$form_content .= "<input type='hidden' name='".$use_name[$i]."' value='".$hvalue[$i]."'>";
}

if($type[$i]=="ENV")
{
$form_content .= "<input type='hidden' name='".$use_name[$i]."' value='".$evalue[$i]."'>";
}

//File
if($type[$i]=="file_upload")
{
if($size1[$i]=="")
$form_content .= "<input type='file' name='".$use_name[$i]."'>";
else
$form_content .= "<input type='hidden' name='MAX_FILE_SIZE' value='".$size1[$i]."'> <input type='file' name='".$use_name[$i]."'>";
}


//Text Area
else if($type[$i]=="textarea")
$form_content .= "<textarea name='".$use_name[$i]."' rows=".$size1[$i]." cols=".$size2[$i]."></textarea>";

//Drop Down
else if($type[$i]=="select")
{
$form_content .= "<select name='".$use_name[$i]."'>";
for($j=0;$j<sizeof($select[$i]);$j++)
$form_content .= "<option value='".$select[$i][$j]."'>".$select[$i][$j];
$form_content .= "</select>";
}

//Radio
else if($type[$i]=="radio")
{
for($j=0;$j<sizeof($radio[$i]);$j++)
$form_content .= "<input type=radio name='".$use_name[$i]."' value='".$radio[$i][$j]."'>".$radio[$i][$j]."<br>";
}

if($required[$i]=="on")
$form_content .="*";
if($type[$i]!="hidden" && $type[$i]!="ENV")
$form_content .= "</td></tr>";
}

$form_content .= "<tr><td colspan=\"3\" bgcolor=\"#B5CBEF\" height=\"25\" width=\"737\" background=\"tile_sub.gif\">";
$form_content .= "<p align=\"center\"><font face=\"Verdana\" size=\"2\"><input type=submit value='Submit Form'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type=reset value='Reset Form'></font></td></tr>\n";
$form_content .="</table></form> <br><br><a href='http://phpformgen.sourceforge.net'><img src='button.jpg' border=0></a>";

if($template_name=='default')
$out=fopen("forms/form1.html","w") or die ("cannot create file");
else
{
include("templates/".$template_name);
$form_content = $form_text;
$out=fopen("forms/form1.html","w") or die ("cannot create file");
}

if(fwrite($out,$form_content)==-1)
echo "An error occured while writing to file.";
else
echo "Form created!<br><br>";
fclose($out);
echo "Generating form processor...";

$form_process ="<?php\n";
$form_process .="include(\"global.inc.php\");\n";
//pt_register('POST','fields');

$form_process .="\$errors=0;\n";
$form_process .="\$error=\"The following errors occured while processing your form input.<ul>\";\n";

for($i=0;$i<sizeof($name);$i++)
{
// add the bloody global registers fix here!
if($type[$i]=="file_upload")
{
$form_process .="\$".$use_name[$i]."=\$HTTP_POST_FILES['".$use_name[$i]."'];\n";
}
else
{
$form_process .="pt_register('POST','".$use_name[$i]."');\n";
}
if($type[$i]=="textarea")
{
$form_process .="\$".$use_name[$i]."=preg_replace(\"/(\\015\\012)|(\\015)|(\\012)/\",\"&nbsp;<br />\", \$".$use_name[$i].");";
}
}

$docheck=0;
for($i=0;$i<sizeof($name);$i++)
{
if($required[$i]!="")
$docheck=1;
}

//Check for required fields
if($docheck==1)
{
$form_process .="if(";
$done_bef=0;
for($i=0;$i<sizeof($name);$i++)
{
if($required[$i]=="on" && $done_bef!=0)
{
$form_process .="|| \$".$use_name[$i]."==\"\" ";
}
else if($required[$i]=="on")
{
$form_process .="\$".$use_name[$i]."==\"\" ";
$done_bef=1;
}

}
$form_process .="){\n";
$form_process .="\$errors=1;\n";
$form_process .="\$error.=\"<li>You did not enter one or more of the required fields. Please go back and try again.\";\n}\n";
}

//Check upload success
for($i=0;$i<sizeof($name);$i++)
{
if($type[$i]=="file_upload")
{
if($required[$i]!="on")
{
$form_process .= "if(\$HTTP_POST_FILES['".$use_name[$i]."']['tmp_name']==\"\"){ }\n else ";
$form_process .= "if(!is_uploaded_file(\$HTTP_POST_FILES['".$use_name[$i]."']['tmp_name'])){\n";
$form_process .= "\$error.=\"<li>The file, \".\$HTTP_POST_FILES['".$use_name[$i]."']['name'].\", was not uploaded!\";\n";
$form_process .= "\$errors=1;\n}\n";
}
else
{
$form_process .= "if(!is_uploaded_file(\$HTTP_POST_FILES['".$use_name[$i]."']['tmp_name'])){\n";
$form_process .= "\$error.=\"<li>The file, \".\$HTTP_POST_FILES['".$use_name[$i]."']['name'].\", was not uploaded!\";\n";
$form_process .= "\$errors=1;\n}\n";
}
}
}

//Check email validity
for($i=0;$i<sizeof($name);$i++)
{
if($type[$i]=="email")
{
$form_process .= "if(!eregi(\"^[a-z0-9]+([_\\\\.-][a-z0-9]+)*\" .\"@\".\"([a-z0-9]+([\\.-][a-z0-9]+)*)+\".\"\\\\.[a-z]{2,}\".\"$\",\$".$use_name[$i].")){\n";
$form_process .= "\$error.=\"<li>Invalid email address entered\";\n";
$form_process .= "\$errors=1;\n}\n";
}
}


//add env var data
for($i=0;$i<sizeof($name);$i++)
{
if($type[$i]=="ENV")
{
if($evalue[$i]=="IP")
$temp_value = "\$HTTP_SERVER_VARS[\"REMOTE_ADDR\"]";
else if($evalue[$i]=="date_stamp")
$temp_value = "date(\"l jS of F Y h:i:s A\")";
else
$temp_value = "\$HTTP_SERVER_VARS[\"HTTP_USER_AGENT\"]";

$form_process .= "\$".$use_name[$i]." = ".$temp_value.";\n";
}
}

//Print errors in form, or proceed
$form_process .="if(\$errors==1) echo \$error;\n";
$form_process .="else{\n";

//Write the upload code
for($i=0;$i<sizeof($name);$i++)
{
if($type[$i]=='file_upload')
{
$form_process .= "\$image_part = date(\"h_i_s\").\"_\".\$HTTP_POST_FILES['".$use_name[$i]."']['name'];\n";
$form_process .= "\$image_list[".$i."] = \$image_part;\n";
$form_process .= "copy(\$HTTP_POST_FILES['".$use_name[$i]."']['tmp_name'], \"files/\".\$image_part);\n";

}
}

//Email the form
$form_process .= "\$where_form_is=\"http\".(\$HTTP_SERVER_VARS[\"HTTPS\"]==\"on\"?\"s\":\"\").\"://\".\$SERVER_NAME.strrev(strstr(strrev(\$PHP_SELF),\"/\"));\n";

$newline="\n";
$form_process .="\$message=\"";
for($i=0;$i<sizeof($name);$i++)
{

if($type[$i]!="file_upload")
$form_process .=$name[$i].": \".\$".$use_name[$i].".\"".$newline;
else
$form_process .=$name[$i].": \".\$where_form_is.\"files/\".\$image_list[".$i."].\"".$newline;
}

$form_process .="\";\n";
if($email!="")
{
$form_process .="\$message = stripslashes(\$message);\n";
$form_process .="mail(\"".$email."\",\"Form Submitted at your website\",\$message,\"From: phpFormGenerator\");\n";
}

//Put info in database if asked for
if($db=="yes")
{
$tabo_name = $tab_name;
if($new_table=="yes")
$tabo_name = $table_name;

$form_process .="\$link = mysql_connect(\"".$hostname."\",\"".$dbuser."\",\"".$dbpass."\");\n";
$form_process .="mysql_select_db(\"".$dbname."\",\$link);\n";

$form_process .="\$query=\"insert into ".$tabo_name." (";
for($i=0;$i<sizeof($column);$i++)
{
if($i==0)
$form_process .=$column[$i];
else
$form_process .=",".$column[$i];
}
$form_process .=") values (";

for($i=0;$i<sizeof($column);$i++)
{
if($i==0)
{
if($type[$i]=="file_upload")
$form_process .="'\".\$where_form_is.\"files/\".\$image_list[".$i."].\"'";
else
$form_process .="'\".\$".$use_name[$i].".\"'";
}
else
{
if($type[$i]=="file_upload")
$form_process .=",'\".\$where_form_is.\"files/\".\$image_list[".$i."].\"'";
else
$form_process .=",'\".\$".$use_name[$i].".\"'";
}

}
$form_process .=")\";\n";

$form_process .="mysql_query(\$query);\n";

}

if($create_dat=="on")
{
echo "<br><br>Generating file-based database...";
$dat_out="";
for($i=0;$i<sizeof($name);$i++)
{
if($i==0)
$dat_out .= $name[$i];
else
$dat_out .= "|".$name[$i];
}
$form_process .="\$make=fopen(\"admin/data.dat\",\"a\");\n";
$form_process .="\$to_put=\"\";\n";

$make = fopen("forms/admin/data.dat","w") or die("Could not write file-based data file.");
$dat_out.="\n";
fwrite($make,$dat_out);
$conf_file = fopen("forms/admin/config.inc.php","w") or die("Could not write to admin portal file.");
fwrite($conf_file,"<?php \n\$file_db=1;\n");

$form_process .="\$to_put .= ";
for($i=0;$i<sizeof($name);$i++)
{
if($type[$i]!="file_upload")
$form_process .="\$".$use_name[$i];
else
$form_process .="\$where_form_is.\"files/\".\$image_list[".$i."]";
if($i!=sizeof($name)-1)
$form_process .= ".\"|\".";
else
$form_process .=".\"\n\";\n";
}

$form_process .="fwrite(\$make,\$to_put);\n";
//echo "Done!<br>";
}

if($gen_thank == "on")
{
$form_process .="?>\n\n\n<!-- This is the content of the Thank you page, be careful while changing it -->\n\n";
$form_process .="<h2>Thank you!</h2>\n\n";
$form_process .="<table width=50%>\n";
for($gg=0;$gg<sizeof($name);$gg++)
$form_process .="<tr><td>".$name[$gg].": </td><td> <?php echo \$".$use_name[$gg]."; ?> </td></tr>\n";
$form_process .="</table>\n<!-- Do not change anything below this line -->\n\n";
}
else
$form_process .="\nheader(\"Refresh: 0;url=http://".$redirect."\");\n?>";


$form_process .="<?php \n}\n";
$form_process .="?>";

$out = fopen("forms/process.php","w");
fwrite($out,$form_process);
fclose($out);

include("copyfunc.php");
copy_dirs("forms", "use/".$form_name);
//echo "Couldn't copy form!";

//$thank_page = 
echo "<br><br> All Done!";
echo "<br><br>The form and the processor were created and placed in the ";
echo "'forms' directory under the phpformgen's directory. You can reach it";
echo " by clicking <a href='use/".$form_name."/form1.html'>here</a>. An administration ";
echo "portal was also created for managing your form records. It can be ";
echo "reached by clicking <a href='use/".$form_name."/admin/index.php'>here</a>.";
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
