<?php
	session_start();
	include_once "../dbhelper.php";
	

	$data = $_GET['add'] ; 
	echo $data . "<br>";
	$_SESSION['category'] = $data;
	//$row = $db->getAppInfo($_GET['add']);
	//echo $row['app_price'];

	

	header("Location: category.php");
	
?>
