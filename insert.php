<?php
 
$connect = mysqli_connect("localhost", "root", "", "testing");
$output = '';
$out = '';
$query = "";

if (isset($_POST['new_type'])) {
    $type = $_POST['new_type'];
}else{
    $type = $_POST['type'];
}
if (isset($_POST['new_location'])) {
    $location = $_POST['new_location'];
}else{
    $location = $_POST['location'];
}

    $description = $_POST['description'];

    // echo $type;
    // echo $location;
    // echo $description;

    $query = "INSERT INTO products (Type, Location, Description) VALUES ('$type', '$location', '$description')";
    // echo "string";

$result = mysqli_query($connect, $query);
    //Close connection
    mysqli_close($connect);
 
?>