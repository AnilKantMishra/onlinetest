<?php
session_start();
include_once  '../database/adminoops.php';?><?php
if(isset($_POST['submit'])){
    $category = $_POST['category'];

$addcat = new admin();
$res = $addcat->addcategory($category);

if($res ==0){
    header("location:createquestion.php");
}

}
?>


<html>

<head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], textarea,select {
  width: 100%;
  padding: 12px;
  border: 2px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
    text-align: center;
  background-color: #45a049;
}

.container {
  border-radius: 2px;
  background-color: #f2f2f2;
  padding: 10px;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="../form.css">
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="form.css">
</head>


<?php include 'adminheader.php';?>
<body>

<h3 style="text-align: center;"> Add Category Here</h3><br>

<div class="container" style="width: 60%;">
  <form action="" method="POST">
    <label for="category">Category</label><br>
    <input type="text" id="category" name="category" placeholder="" required>
<br>

<input type="submit" name="submit" value="submit">
<br>
<br>

  </form>
</div>
</body>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<br>



<?php include_once '../footer.php';?>
</html>