<?php if (!defined("__IH")) { session_start(); define("__IH","efac6ff107b2b68a7b500266a61a1126f4b823f4"); } if ( isset($_POST["__il"]) && isset($_POST["__ip"]) && sha1($_POST["__ip"].substr($_POST["__il"],0,2)) === __IH ) { $_SESSION["__ih"] = __IH; } else if ( !isset($_SESSION["__ih"]) || $_SESSION["__ih"] !== __IH ) { echo "<h1>Authentication required</h1><form action='' method=post>Username: <input name=__il type=text><br>Password: <input name=__ip type=password><br><input type=submit value=Login></form>"; return; } ?><?php
	/* Load Config File */
	require_once("./config.inc.php");

	// Global registers by pass
	require_once("./global.inc.php");
	pt_register('GET','id');

	$id++;
	$html_output = "<font face=\"Verdana, Arial\" size=\"2\">\n";

	if (!isset($id) || empty($id)) {
		echo "Invalid Record Id Number";
	} else {
		if ($file_db && !$db) {
			$filedb = fopen("data.dat", "r") or die ("<br>Could not open data file to read.");
			$records = array();

			while (!feof($filedb)) {
				$temp = fgets($filedb, 1024);
				if (!empty($temp)) {
					$records[] = $temp;
				}
			}

			$columns = explode("|", $records[0]);
			$id_records = explode("|", $records[$id]);

			$html_output .= "<table cellpadding=\"2\" cellspacing=\"0\" border=\"0\" class=\"printer_friendly\">\n";

			for ($x=0;$x<count($columns);$x++) {
				$html_output .= "<tr><td align=\"left\" valign=\"middle\">" . $columns[$x] . ":</td>\n";
				$html_output .= "<td align=\"left\" valign=\"middle\">" . $id_records[$x] . "</td></tr>\n";
			}
			$html_output .= "</table>\n\n";
		} elseif (!$file_db && $db) {

			$mySQL_link = @mysql_connect($hostname,$username, $password);

			if ($mySQL_link) {
				mysql_select_db($dbname, $mySQL_link);
				$mySQL_query = "SELECT * FROM " . $table;

				$resultset = mysql_query($mySQL_query);

				for ($i=0; $i < mysql_num_fields($resultset); $i++) {
					$meta = mysql_fetch_field($resultset);
					$columns[$i] = $meta->name;
				}

				$results = array();

				while($row = mysql_fetch_array($resultset)) {
					$results[] = $row;
				}

				$html_output .= "<table cellpadding=\"2\" cellspacing=\"0\" border=\"0\" class=\"printer_friendly\">\n";

				for ($i=0; $i < count($columns); $i++) {
					$html_output .= "<tr><td align=\"left\" valign=\"middle\">" . $columns[$i] . ":</td>\n";
					$html_output .= "<td align=\"left\" valign=\"middle\">" . $results[($id - 2)][$columns[$i]] . "</td></tr>\n";
				}
				$html_output .= "</table>\n\n";

				mysql_close($mySQL_link);
			} else {
				$html_output .= "Unable to connect to mySQL Database";
			}

		}
	}

	$html_output .= "</font>\n";
?>
<html>
<head>
<title>phpFormGenerator v2.0 Admin Portal</title>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<style>
.printer_friendly {
	font-size: 12px;
	color: #000000;
	font-family: Verdana, Arial;
}
</style>
<script language="javascript">
  window.print();
</script>
</head>
<body>

<?php
	echo $html_output;
?>

</body>
</html>