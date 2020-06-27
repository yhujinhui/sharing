<?php
require_once('conn.php');
$db=$conn;
//$db = mysqli_connect('localhost','root','mirim2','chat','3307');
$db->query('SET NAMES utf8');
/*
$res = $db->query('
	INSERT INTO chat(name, msg, date)
	VALUES(
		"' . $db->real_escape_string($_POST['name']) . '",
		"' . $db->real_escape_string($_POST['msg']) . '",
		NOW()
	)
');
*/

$res = $db->query('
	INSERT INTO chat(name, msg, chat_group_id,date)
	VALUES(
		"' . $db->real_escape_string($_POST['name']) . '",
		"' . $db->real_escape_string($_POST['msg']) . '",
		"' . $db->real_escape_string($_POST['chat_group_id']) . '",
		NOW()
	)
');

?>