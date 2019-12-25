<?php 

if( isset( $_POST['myCheckboxes'] ) )
{
//fetch.php
	$connect = mysqli_connect("localhost", "root", "", "testing");
	$output = '';
	$out = '';
	$query = "";


	$checked = $_POST['myCheckboxes'];
	$arr = explode(",", $checked);

	foreach ($arr as $key => $value) {
		if (is_numeric($value)) {
			$query = "DELETE FROM `products` WHERE `ID` = ".$value.";";
			$result = mysqli_query($connect, $query);
		}
	}
	mysqli_close($connect);
}

 ?>