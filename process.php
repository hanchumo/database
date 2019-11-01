<?php
require_once "db.php";

$name=$_POST["name"];
$maths=$_POST["maths"];
$science=$_POST["science"];
$kiswahili=$_POST["kiswahili"];
$socialstudies=$_POST['socialstudies'];
$english=$_POST["english"];

$sql="INSERT INTO `student_data`(`name`, `maths`, `english`, `science`, `kiswahili`, `socialstudies`) VALUES ('$name','$maths','$english','$science','$kiswahili','$socialstudies')";
if ($conn->query($sql) === TRUE) {
    header("Location:results.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>