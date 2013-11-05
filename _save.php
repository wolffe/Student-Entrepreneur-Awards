<?php
$server = 'mysql2003int.cp.blacknight.com';
$username = 'u1056959_root_ei';
$password = 'zincdesign';
$database = 'db1056959_sandbox_ei';

$con = mysql_connect($server, $username, $password) or die ("Could not connect: " . mysql_error());

mysql_select_db($database, $con);

$locationID = $_POST["lid"];
$email = mysql_real_escape_string($_POST["email"]);

$sql = "INSERT INTO email(location_id, email) ";
$sql .= "VALUES ($locationID, '$email')";

if(!mysql_query($sql, $con)) {
	die('Error: ' . mysql_error());
} else {
	echo "Email added";
}
?>
