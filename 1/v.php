<?php
$phpid = $_GET['PHPSESSID'];
$id = $_GET['id'];
$vote = intval($_GET['vote']);

if ($phpid == 'abcaeadfc31a5c43b2534bf995c0553f' && $id == '2') {
	if ($vote > 5) {
		echo 'Congratulations! You have solved the challenge! The secret code is secret';
	}
	else {
		header("Location: index.php");
	}
} else {
	header("Location: index.php");
}
?>