<?php
require_once "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<style>
div {
  width: 35px;
  height: 5px;
  background-color: green;
  margin: 6px 0;
}
</style>
</head>
<body>

<p>report card:</p>

<div></div>
<div></div>
<div></div>


<main class="container">

<h1 class="page-header text-center capitalize">Student results</h1>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

</body>
</html>

<table class="table">
    <thead class="thead-light">
    <tr>
      <th>name</th>
        <th>maths</th>
        <th>english</th>
        <th>kiswahili</th>
        <th>social studies</th>
        <th>science</th>
        <th>average</th>
        <th>grade</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $sql="SELECT * FROM `student_data` ";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$avg=($row['maths']+$row['english']+$row['kiswahili']+$row['socialstudies']+$row['science'])/5;
if ($avg < 100 && $avg > 80 ){
    $grade="A";
}elseif ($avg < 80 && $avg > 60) {
 $grade="B";   
 
}elseif ($avg < 60 && $avg > 40) {
    $grade="C";
    # code...
}elseif ($avg < 40 && $avg > 20){
    $grade="D";
}elseif ($avg <20){
    $grade="E";
}


       /// echo "id: " . $row["id"]. " - Name: " . $row["maths"]. " " . $row["english"].  "<br>";
       echo " <tr>
      <th>{$row['name']}</th>
        <th>{$row['maths']}</th>
        <th>{$row['english']}</th>
        <th>{$row['kiswahili']}</th>
        <th>{$row['socialstudies']}</th>
        <th>{$row['science']}</th>
        <th>{$avg}</th>
        <th>{$grade}</th>
      </tr>
      ";


    }
} else {
    echo "0 results";
}


$conn->close();
    ?>
    
    </tbody>
    </table>
</main>
</body>
</html>