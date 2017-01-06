



<?php

	session_start();

	echo $_POST['pial'] . " *** " . $_SESSION['key'] . " " . $_SESSION['email'] . "<br>";
	echo "ehsan";
	if($_POST['pial'] == $_SESSION['key'])
	{
		echo "pial";
		header("Location: resetpass.php");
	}
	else
	{
		$_SESSION['info'] = "wrong";
		echo $_SESSION['info'];
		header("Location: forgotpass.php");
	}
	//echo $_POST['pial'] . " *** " . $_SESSION['key'] . " " . $_SESSION['email'];
?>

