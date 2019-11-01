<?php
require_once "db.php";

if(!isset($_GET['id'])){
    header("Location: index.php");

}else{
    $id = $_GET['id'];

    $sql = "select * from `products_table` where `id`=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>sample project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<body style='background-color:green'>
<div class="container">
 <h1 class="page-header"><?php
 echo $row['name'];
 ?></h1>

<form action="" method=
'post' class="form-horizontal">
<?php
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $description=$_POST["description"];
    $mfg=$_POST["mfg"];
    $exp=$_POST["exp"];

    if(!empty($name) && !empty($description)&& !empty($mfg)&& !empty($exp)){
        
$sql = "UPDATE `products_table` SET `name`='$name',`description`='$description',`manufacturing_date`='$mfg',`expiry_date`='$exp' WHERE `id`='$id'";

if ($conn->query($sql) === TRUE) {
    header("Location:index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


    }
}

?>
  <div class="form-group">
    <label for="email">name:</label>
    <input type="text" class="form-control" name="name" value="<?php echo $row['name']?>">
  </div>
  <div class="form-group">
    <label for="description">description</label>
    <input type="text" class="form-control" name="description" value="<?php echo $row['description']?>">
  </div>
  <div class="form-group">
    <label for="pwd">manufacturing date</label>
    <input type="date" class="form-control" name="mfg" value="<?php echo $row['manufacturing_date']?>">
  </div>
  <div class="form-group">
    <label for="pwd">expiry date</label>
    <input type="date" class="form-control" name="exp" value="<?php echo $row['expiry_date']?>">
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

</div>

</body>
</html>
