<?php
require_once "db.php";
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
 <h1 class="page-header">products table</h1>
 <table class="table">
    <thead class="thead-light">
      <tr>
        <th>name</th>
        <th>description</th>
        <th>mfg</th>
        <th>exp</th>
        <th>Option</th>
      </tr>
    </thead>
    <tbody>
     <?php
     $sql = "SELECT * FROM `products_table`";
     $result = $conn->query($sql);
     
     if ($result->num_rows > 0) {
         // output data of each row
         while($row = $result->fetch_assoc()) {
             echo "<tr><td>{$row['name']}</td><td>{$row['description']}</td><td>{$row['manufacturing_date']}</td><td>{$row['expiry_date']}</td><td><a href='delete.php?id={$row['id']}'><button class='btn btn-danger btn-sm'>Delete</button></a> <a href='edit.php?id={$row['id']}'><button class='btn btn-success btn-sm'>edit</button></a></td></tr>";
         }
     } else {
         echo "0 results";
     }
     
     ?>
    </tbody>
  </table> 
<form action="" method=
'post' class="form-horizontal">
<?php
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $description=$_POST["description"];
    $mfg=$_POST["mfg"];
    $exp=$_POST["exp"];

    if(!empty($name) && !empty($description)&& !empty($mfg)&& !empty($exp)){
        
$sql = "INSERT INTO `products_table`( `name`, `description`, `manufacturing_date`, `expiry_date`) VALUES ('$name','$description','$mfg','$exp')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


    }
}

?>
  <div class="form-group">
    <label for="email">name:</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="form-group">
    <label for="description">description</label>
    <input type="text" class="form-control" name="description">
  </div>
  <div class="form-group">
    <label for="pwd">manufacturing date</label>
    <input type="date" class="form-control" name="mfg">
  </div>
  <div class="form-group">
    <label for="pwd">expiry date</label>
    <input type="date" class="form-control" name="exp">
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

</div>

</body>
</html>
