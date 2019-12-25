<?php
 
//fetch.php
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
    $edit_ID = $_POST['edit_ID'];
    echo $type;
    echo $location;
    echo $description;
    echo $edit_ID;
    $query = "UPDATE products SET `Type`='".$type."', `Location`='".$location."', `Description`='".$description."' WHERE `ID`=".$edit_ID;

$result = mysqli_query($connect, $query);
    //Close connection
    mysqli_close($connect);
 
?>