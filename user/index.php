

<html>

<head>
</head>
<style>  
body{
  
}
.card{
    background-color: #f2f2f2;
  padding: 30px;
    height: 250px;;
    font-size:20px
}

</style>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<body>

<?php include 'userheader.php';?>
<div class="container"style="margin-top:-25px">
<img src="../quiz-logo_2728-12.jpg" style="margin-top:-100px;width: 420px;height:420px;float:right">
  <div class="row">
  <h2>The Test</h2>
  <p style="font-size: 17px;">The test will be submitted in 5 minutes.</p>
  <h2>Count Your Score</h2>
<p style="font-size: 17px;">You will get 1 point for each correct answer. At the end of the Quiz, your total score will be displayed. </p>


  </div>
</div>



<div class="container">
<div class="row">


		<?php
              include_once '../database/adminoops.php';
              $userlogin = new admin();
						$res = $userlogin->nav();
						$row = $res->num_rows;
						for($i=0;$i<$row;$i++){
							$resultobj = $res->fetch_assoc();
                             
                            echo ' <div class="col-sm-4"><br>
                             <div class="card " style="min-height:300px">
                            <div class="card-body">
                            <h2> Start the Quiz <h2>
                            <p class="card-text" style="color:red">'.$resultobj['cat_name'].'</p>

                             <a style="margin-top:20px;font-size:18px" href="starttest.php?id='.$resultobj['cat_id'].'&name='.$resultobj['cat_name'].'"> START TEST HERE
                            </a> </div> </div> </div>';
											}
			
											?>
			
</div>				
</div>       
</body>


<?php include '../footer.php';?>
</html>