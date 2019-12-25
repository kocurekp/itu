<?php 

// echo var_export($_POST);

if( isset( $_POST['myCheckboxes'] ) )
{




//fetch.php
$connect = mysqli_connect("localhost", "root", "", "testing");
$output = '';
$out = '';
$query = "";


$checked = $_POST['myCheckboxes'];
// print_r($checked);

foreach ($checked as $key => $value) {
	if (is_numeric($value)) {
		// echo $value;
		 $query = "DELETE FROM `products` WHERE `ID` = ".$value.";";

$result = mysqli_query($connect, $query);
	}
}
// echo $query;

header("location: index.php");

}
// // create the response
// $response = 'an HTML response';
// $response = stripslashes($response);
// echo($response);



 ?>