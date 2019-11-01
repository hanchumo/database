<?php

require_once "db.php";
if(!isset($_GET['id'])){
    echo "incorrect url";

}else{
    $id = $_GET['id'];
}
$sql = "DELETE FROM `products_table` WHERE `id`=$id";

if (mysqli_query($conn, $sql)) {
    header("Location:index.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}


mysqli_close($conn);
?>
