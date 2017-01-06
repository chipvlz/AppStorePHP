<?php

session_start();

include_once "../dbhelper.php";

if(!isset($_SESSION['user']))
{
	header("Location: ../index.php");	//go back to previous directory
}

$name = $_SESSION['name'];
$email = $_SESSION['user'];
echo $name . " " . $email;

$db->insertdownloadlist($email,$name);

header("Location: games/game1.apk");



?>