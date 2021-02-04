<?php
session_start();
include '../database/adminoops.php';?><?php
if(isset($_POST['submit'])){

  $selectcat = $_POST['selectcat'];

    $Question = $_POST['Question'];
  $Answer = $_POST['Answer'];   
 $Option1 = $_POST['option1'];
 $Option2 = $_POST['option2'];
 $Option3 = $_POST['option3'];
 $Option4 = $_POST['option4'];

$userlogin = new admin();
$res = $userlogin->addquestion(  $selectcat,$Question,$Answer,$Option1,$Option2,$Option3,$Option4);



}
?>


<html>

<head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
select {

-moz-appearance: none;

-webkit-appearance: none;
}


select::-ms-expand {
display: none;
}
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



<h3 style="text-align: center;"> Add Question Here</h3><br>

<div class="container">
  <form action="" method="POST">
  <label for="category">Category</label><br>
  <select class="form-dropdown validate (required)" 
  name="selectcat" style="width:310px" data-component="dropdown" area-labelledby="label_3">
								<?php							
											$navobj = new admin();
											$res = $navobj->categoryshowhere();
											$row = $res->num_rows;
											for($i=0;$i<$row;$i++){
												   $resultobj = $res->fetch_assoc();
												   ?>
        <option name="selectcat" value="<?php echo $resultobj['cat_id'];?>"><?php echo $resultobj['cat_name'];?> 
            </option>
<?php
											}														
											?>
                </select>
  <br><br>
    <label for="Question">Question</label><br>
    <input type="text" id="Question" name="Question" placeholder="" required>
<br>
    <label for="Answer">Answer</label><br>
    <input type="text" id="Answer" name="Answer" placeholder="" required>
    <br>
    <br>
    <label for="Option">Option1</label>
    <br>
    <input type="text" id="option1" name="option1" placeholder="" required>
    <br>
    <label for="Option">Option2</label>
    <br>
    <input type="text" id="option2" name="option2" placeholder="" required>
    <br>
    <label for="Option">Option3</label>
    <br>
    <input type="text" id="option3" name="option3" placeholder="" required>
    <br>
    <label for="Option">Option4</label>
    <br>
    <input type="text" id="option4" name="option4" placeholder="" required>
    <br>
  <br>

    <input type="submit" name="submit" value="submit">
    <br>
    <br>
  </form>
</div>



</body>


<?php include '../footer.php';?>
</html>