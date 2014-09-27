<?php
	include 'database/DB.php';
	$db = new DB();
	session_destroy();
	header('location:index.php');
?>