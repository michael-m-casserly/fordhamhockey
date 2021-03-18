<?php

// Starting stuff
$form_text = "<HTML><HEAD><TITLE>My Form - created with phpFormGenerator</TITLE></HEAD>\n";
$form_text .= "<BODY>\n";
$form_text .= "<font face='arial' size=2><b>All fields marked with a * are required:<br>\n";
$form_text .= "<form enctype='multipart/form-data' action='process.php' method='post'>\n";
$form_text .= "<table border=1 bordercolor='#000000'><tr><tr>\n";
$form_text .= "<table width='50%' border=0>\n";


// Main loop
for($i=0;$i<sizeof($name);$i++)
{
if($i%2==0)
$td_col = "#C0C0C0";
else
$td_col = "#CCCCCC";

if($type[$i]!="hidden" && $type[$i]!="ENV")
{
if($required[$i]!="on")
$form_text .= "<tr><td bgcolor='".$td_col."'> ".$name[$i]."</td>\n";
else
$form_text .= "<tr><td bgcolor='".$td_col."'> ".$name[$i]."<font color='#ff0000'>*</font></td>\n";

$form_text .= "<td bgcolor='".$td_col."'>\n";

// TextBoxes and Checkboxes
if($type[$i]=="text" || $type[$i]=="checkbox" || $type[$i]=="password" || $type[$i]=="email")
{
if($size1[$i]=="")
$form_text .= "<input type=".$type[$i]." name='".$use_name[$i]."'>";
else if($size1[$i]!="" && $type[$i]!="checkbox")
$form_text .= "<input type=".$type[$i]." name='".$use_name[$i]."' size=".$size1[$i].">";
}

// Hidden and Env
if($type[$i]=="hidden")
{
$form_text .= "<input type='hidden' name='".$use_name[$i]."' value='".$hvalue[$i]."'>";
}
if($type[$i]=="ENV")
{
$form_text .= "<input type='hidden' name='".$use_name[$i]."' value='".$evalue[$i]."'>";
}

//File
if($type[$i]=="file_upload")
{
if($size1[$i]=="")
$form_text .= "<input type='file' name='".$use_name[$i]."'>";
else
$form_text .= "<input type='hidden' name='MAX_FILE_SIZE' value='".$size1[$i]."'> <input type='file' name='".$use_name[$i]."'>";
}


//Text Area
else if($type[$i]=="textarea")
$form_text .= "<textarea name='".$use_name[$i]."' rows=".$size1[$i]." cols=".$size2[$i]."></textarea>";

//Drop Down
else if($type[$i]=="select")
{
$form_text .= "<select name='".$use_name[$i]."'>";
for($j=0;$j<sizeof($select[$i]);$j++)
$form_text .= "<option value='".$select[$i][$j]."'>".$select[$i][$j];
$form_text .= "</select>";
}

//Radio
else if($type[$i]=="radio")
{
for($j=0;$j<sizeof($radio[$i]);$j++)
$form_text .= "<input type=radio name='".$use_name[$i]."' value='".$radio[$i][$j]."'>".$radio[$i][$j]."<br>";
}


$form_text .= "</td></tr>\n";
}

}

// Ending stuff
$form_text .= "</table>\n";
$form_text .= "</td></tr></table>\n";
$form_text .= "<input type='submit' value='Submit Form'> <input type=reset value='Clear Form'></form>\n";
$form_text .= "<br><br><br><a href='http://phpformgen.sourceforge.net'><img src='button.jpg' border=0></a>\n";
$form_text .= "</BODY></HTML>\n";
