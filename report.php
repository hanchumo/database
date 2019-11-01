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
< 
<main class="container">
<h2>JUJA ACADEMY</h2>
<h1 class="page-header">Student form</h1>

<form action="process.php" method="post">
<style>
body {margin:0;}

.icon-bar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.icon-bar a {
  float: left;
  width: 20%;
  text-align: center;
  padding: 12px 0;
  transition: all 0.3s ease;
  color: white;
  font-size: 36px;
}

.icon-bar a:hover {
  background-color: #000;
}

.active {
  background-color: #4CAF50;
}
</style>
<body><style>
body {margin:0;}

.icon-bar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.icon-bar a {
  float: left;
  width: 20%;
  text-align: center;
  padding: 12px 0;
  transition: all 0.3s ease;
  color: white;
  font-size: 36px;
}

.icon-bar a:hover {
  background-color: #000;
}

.active {
  background-color: #4CAF50;
}
</style>
<body>
 <div class="icon-bar">
  <a class="active" href="#"><i class="fa fa-home"></i></a> 
<!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#news">Remarks</a>
  <a href="#contact">Position</a>
  <a href="#about">Award</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
</div> 
</div>
<div class="form-group">
    <label for="email">name:</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="form-group">
    <label for="description">maths</label>
    <input type="number" class="form-control" name="maths">
  </div>
  <div class="form-group">
    <label for="pwd">science</label>
    <input type="number" class="form-control" name="science">
  </div>
  <div class="form-group">
    <label for="pwd">english</label>
    <input type="number" class="form-control" name="english">
  </div>
  <div class="form-group">
    <label for="pwd">social studies</label>
    <input type="number" class="form-control" name="socialstudies">
  </div>
  <div class="form-group">
    <label for="pwd">kiswahili</label>
    <input type="number" class="form-control" name="kiswahili">
  </div>
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</main>
</body>
</html>