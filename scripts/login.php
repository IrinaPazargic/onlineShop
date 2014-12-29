<?php
require_once('../database/config.php');
//takes data from the form
$username = $_POST['email'];
$password = $_POST['password'];

// forms and executes the select query from db
$query = "SELECT * FROM user_login WHERE email = '$username'";
$result = mysql_query($query) or die("Error:".mysql_error());
$row = mysql_fetch_assoc($result);

$count = mysql_num_rows($result);

if ($count == 1 && $row['password'] == $password){
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	echo 1;
} else {
	echo 0;
}
?>