<?php
include_once "../dbhelper.php";

	$name = $_POST['name'];
	$attribute = $_POST['attribute'];
	$data = $_POST['data'];
	
	//echo $name . " " . $image . " " . $download . " " . $rating . " " . $type . " " . $company . " " . $os . " " . $price;

	$db->updatedata($name,$attribute,$data);
	

$db->boo();
?>

<a href="edit_admin.php">Go back</a>
