<?php
include_once "../dbhelper.php";	
session_start();


if(!isset($_SESSION['user']))
{
	header("Location: ../index.php");	//go back to previous directory
}

	
	$type = $_POST["cardtype"];
	$cardnum = $_POST["cardnumber"];
	$pin = $_POST['secure'];
	//$name = $_POST['namecard'];
	echo $type . " " . $cardnum . " " . $pin ;

	$flag = $db->buyApp($type,$cardnum,$pin);
	if($flag ==1)
	{
		header("Location: downloadmanager.php");
	}
	else
	{
		echo "Card info didnt matched, try again";
	}
	

?>
