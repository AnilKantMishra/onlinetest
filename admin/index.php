<?php
session_start();




?>


<html>

<head>
<style>



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


<br><br><br><br>

<div class="container-fluid">


<img src="../quiz-logo_2728-12.jpg" style="width: 400px;height:450px;float:left"><br>

<button type="button" class="btn btn-lg btn-primary " style="width: 20%;margin-left:200px ">



<a href="createcategory.php" target="_blank" style="color:white; text-decoration:none;">Create Category</a>
</button><br><br>
<button type="button" class="btn btn-lg btn-primary " style="width: 20%;margin-left:200px ">



<a href="createquestion.php" target="_blank" style="color:white; text-decoration:none;">Create Question</a>
</button><br><br>
<button type="button" class="btn btn-lg btn-primary " style="width: 20%;margin-left:200px ">



<a href="seequestion.php" target="_blank" style="color:white; text-decoration:none;">See Questions </a>
</button>
<br><br>
<button type="button" class="btn btn-lg btn-primary " style="width: 20%;margin-left:200px ">



<a href="seeuser.php" target="_blank" style="color:white; text-decoration:none;">See User Details </a>
</button>
</div><br>


           
</body>


<?php include '../footer.php';?>
</html>