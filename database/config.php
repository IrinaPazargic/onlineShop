<?php
session_start();
class DbConfig
{
	public static $host = "localhost";
	public static $user = "root";
	public static $pass = "root";
	public static $db = "online_shop";
}
$host=DbConfig::$host;
$user=DbConfig::$user;
$pass=DbConfig::$pass;
$db=DbConfig::$db;
mysql_connect($host, $user, $pass) or die ("Can't connect to the database server");
mysql_select_db($db) or die("The database can't be selected");
?>
