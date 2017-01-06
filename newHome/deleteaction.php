<?php
include_once "../dbhelper.php";

	$name = $_POST['person'];
	$attribute = $_POST['data'];
	//$data = $_POST['data'];
	
	echo $name . " " . $attribute;
	$db->updatedata($name,$attribute,$data);
	

$db->boo();
?>

<a href="edit_admin.php">Go back</a>
