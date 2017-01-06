<?php
	session_start();
	include_once "../dbhelper.php";
	

	$data = $_GET['add'] ; 
	echo $data . "<br>";
	$row = $db->getAppInfo($_GET['add']);
	echo $row['app_price'];

	$_SESSION['name'] = $row['app_name'];
	$_SESSION['image'] = $row['image'];
	$_SESSION['price'] = $row['app_price'];
	$_SESSION['company'] = $row['app_company'];
	$_SESSION['rating'] = $row['rating'];
	$_SESSION['description'] = $row['description'];
	$_SESSION['os'] = $row['app_os'];
	$_SESSION['type'] = $row['app_type'];


	header("Location: single.php");
	
?>
