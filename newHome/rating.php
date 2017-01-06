<?php

session_start();
include_once "../dbhelper.php";

if(!isset($_SESSION['user']))
{
	header("Location: ../index.php");	//go back to previous directory
}


$rate = $_POST['rate'];
$email = $_SESSION['user'];
$name = $_SESSION['name'];
echo $name . " " . $email . "<br>";

$flag = $db->checkdownload($email,$name);
echo "flag value " . $flag . "<br>";
if($flag==1)
{
	echo "Available for rating";
	$db->rateapp($name,$rate);
	header("Location: single.php");
}
else
{
	echo "You have to download the app for rating";
}



?>