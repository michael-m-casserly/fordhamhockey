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
                             Step 4: database / email info</b></font></td>
						    <td  bgcolor="#333333"  align="right" class="small">
                            <font color="#FFFFFF">v2.09</font> </td>
						   </tr>
						   <tr>
						     <td colspan="2" class="small">
							 we are almost done. now you need to provide an
                             email address to which the form data will be sent
                             when someone fill it out. you will also be required
                             to provide the url of a thank you page. you can
 also have the form data inserted into a file based database system that will be
created by the program automatically. this is a great feature for those without
access to a mySQL database since it provides the same functionality. furthermore, you can
                             also have the form data inserted into a mySQL
                             database table. if you choose to do so, then you
                             will be required to provide database connection
                             information, and other bits of information. once
                             that is done, please make sure that the <b>forms
                             directory (and everything in it) has read+write access</b>. you can
                             achieve this by issuing the following command on
                             linux/unix:<br> chmod -R 777 forms<br><br>


<!-- The form stuff -->
<?php

// Global registers by pass

include("global.inc.php");
pt_register('POST','fields');pt_register('POST','name');pt_register('POST','type');
pt_register('POST','required');pt_register('POST','size1');pt_register('POST','size2');
pt_register('POST','select');pt_register('POST','radio');pt_register('POST','active');
pt_register('POST','hvalue','evalue');
// Start regular stuff

$errors=0;
$error="The following errors occured while processing your request:<ul>";

for($i=0;$i<sizeof($name);$i++)
{
if($active[$i]!="")
{
for($j=0;$j<$active[$i];$j++)
{
if($select[$i][$j]=="" && $radio[$i][$j]=="")
{
$errors=1;
$error.="<li>[Field No. ".($i+1).", Option No. ".($j+1)."] No option provided.";
}
}
}
}

if($errors==1)
echo $error;
else
{

for($m=0;$m<sizeof($name);$m++)
{
$darez_name[$m]="";
for($n=0;$n<strlen($name[$m]);$n++)
{
if($name[$m][$n]==' ' || $name[$m][$n]=='-')
$darez_name[$m].= '_';
else
$darez_name[$m].= $name[$m][$n];
}
}

echo "<form action='process3.php' method=post><table>";
echo "<tr><td class='small'>Form name: </td><td> <input type=text name='FormName'></td></tr>";
echo "<tr><td class='small'>Email form data to: </td><td> <input type=text name='email'></td></tr>";
echo "<tr><td class='small'>Redirect user to thank you page: </td><td class='small'> http://<input type=text name='redirect'></td></tr>";
echo "<tr><td class='small' width=50%><b>OR</b> Generate thank you page (includes displaying of filled data from the form): </td><td class='small'> <input type='checkbox' name='gen_thank'></td></tr>"; 
echo "</table>";
echo "<br><br>";

echo "<table width='90%'>";
echo "<tr><td class='small'>Choose template: </td><td><select name='template_name'>";
echo "<option value='default'>Default / Aqua";
$hh = opendir('./templates');
while (false !== ($filest = readdir($hh)))
{
if($filest!='.' && $filest!='..')
       echo "<option value='".$filest."'>".$filest;
}
echo "</select></td></tr>";
echo "<tr><td class='small'>Create data file (file based database):</td><td><input type=checkbox name='create_dat'></td></tr>";
echo "<td><td class='small'><br></td><td></td></tr>";
echo "<tr><td class='small'>Insert data to MySQL database table?<br><br></td><td><input type=radio value='yes' name='db'>yes <input type=radio value='no' name='db'>no<br><br></td></tr>";
echo "<tr><td colspan=2 class='small'>If you chose yes, please enter your MySQL database access information:</td></tr>";
echo "<tr><td class='small'>hostname:</td class='small'><td><input type=text name='hostname'></td></tr>";
echo "<tr><td class='small'>username:</td><td><input type=text name='dbuser'></td></tr>";
echo "<tr><td class='small'>password:</td><td><input type=password name='dbpass'></td></tr>";
echo "<tr><td class='small'>database:</td><td><input type=text name='dbname'></td></tr>";
echo "<tr><td class='small'><br>Create new table?<br><br></td><td><br><input type=radio name='new_table' value='yes'>yes <input type=radio name='new_table' value='no'>no<br><br></td></tr>";
echo "<tr><td colspan=2 class='small'>If you chose yes, please enter a name for the table to be created:</td></tr>";
echo "<tr><td class='small'>table name:</td><td><input type=text name='table_name'></td></tr>";
echo "<tr><td class='small' colspan=2><br>If you chose no, please provide the name of the table to be used, and the columns to enter each of the following fields. (Please note that this table you enter, and its columns must already exist). If you chose to create a new table, you still need to provide column names to be created. The suggested column names have been filled out, but you can change them:</td></tr>";
echo "<tr><td  class='small'>table name:</td><td><input type=text name='tab_name'></td></tr>";

echo "<tr><td class='small'><br>Form Field</td><td class='small'><br>Table column</td></tr>";
for($i=0;$i<sizeof($name);$i++)
{
echo "<tr><td class='small'>".$name[$i]."</td><td><input type=text name='column[$i]' value='".$darez_name[$i]."'></td></tr>";
}

echo "</table>";
for($i=0;$i<sizeof($name);$i++)
{
echo "<input type='hidden' name='name[$i]' value='".$name[$i]."'>";
echo "<input type='hidden' name='type[$i]' value='".$type[$i]."'>";
echo "<input type='hidden' name='size1[$i]' value='".$size1[$i]."'>";
echo "<input type='hidden' name='size2[$i]' value='".$size2[$i]."'>";
echo "<input type='hidden' name='required[$i]' value='".$required[$i]."'>";
echo "<input type='hidden' name='active[$i]' value='".$active[$i]."'>";
echo "<input type='hidden' name='hvalue[$i]' value='".$hvalue[$i]."'>";
echo "<input type='hidden' name='evalue[$i]' value='".$evalue[$i]."'>";
if($active[$i]!="")
{
for($j=0;$j<$active[$i];$j++)
{
echo "<input type='hidden' name='select[$i][$j]' value='".$select[$i][$j]."'>";
echo "<input type='hidden' name='radio[$i][$j]' value='".$radio[$i][$j]."'>";
}
}
}
echo "<br><Br><input type=submit value='next'>";

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
