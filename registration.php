<?php
	include_once "dbhelper.php";


	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$pass = $_POST['pass'];
	$repass = $_POST['repass'];
	echo $name . "  " . $pass;

	
	//$db->boo();
	$db->insert($name,$mail,$pass,$repass);

	
	

	/*$myfile = fopen("signin.xml", "w")  or die("Unable to open file!");
	echo "boo!!";
	$xml = new SimpleXMLElement('<xml/>');
	$track = $xml->addChild('login_info');

	$track->addChild('email',"pqr");
	$track->addChild('password',"abc");
	//Header('Content-type: text/xml');
	fwrite($myfile, $xml->asXML());
	fclose($myfile);*/
	

	




?>
