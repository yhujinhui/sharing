<?php
$message=$_POST['message'];
require_once("conn.php");
$db=$conn;
$db->query('SET NAMES utf8');
$res = $db->query('
	INSERT INTO message(message, date)
	VALUES(
		"' . $db->real_escape_string($message) . '",
		NOW()
	)
');
header("Location: admin.php");
?>