<?php
	session_start();
	include_once "dbhelper.php";

	if(isset($_SESSION['user'])!="")
	{
		echo "damn!!";
		header("Location: newHome/index.php");	// change probably done
	}
	
	$radio = $_POST['person'];
	
	echo $radio . " " . $radio; 
	
	$mail = $_POST['mail'];
	$pass = $_POST['pass'];
	echo $mail . "  " . $pass;
	//header("Location: home.php");
	//$db->begin();
	if($radio == "user")
	{	
		$flag = $db->signUp($mail,$pass);
		if($flag==1)
		{
			$_SESSION['user'] = $mail;

			header("Location: newHome/index.php");
		}
		else
			header("Location: loginFailed.php");
	}

	if($radio == "admin")
	{
		$flag = $db->signUpAdmin($mail,$pass);
		if($flag == 1)
		{
			$_SESSION['user'] = $mail;
			$_SESSION['admin'] = "true";
			header("Location: newHome/index.php");
		}
		else
		{
			echo "you are fake, get out";
		}
	}
	

	




?>
