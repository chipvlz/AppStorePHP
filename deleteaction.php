<?php

include_once "../dbhelper.php";

	$attribute = $_POST['person'];
	$data = $_POST['data'];
	//$data = $_POST['data'];
	
	echo $attribute . " " . $data;
	echo "pial";
	//$db->deleteData($attribute,$data);	

//$db->boo();
?>

<a href="edit_admin.php">Go back</a>
