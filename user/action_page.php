
<!DOCTYPE html>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">



<style>

body {
background-color: #f1f1f1;
}


h1 {
text-align: center;  
font-size: 18px;
}


</style> 
<?php include 'userheader.php';?>
<body>
<h1>Total  Question <br><br><mark><?php echo $_SESSION['questionrow'];   ?> </mark></h1> 
<?php $question =$_SESSION['questionrow'];  ?>
<h1>Correct Answer<br><br>
<div>



<?php

$count=0; 
include_once '../database/useroops.php';
$score = new user();
  
  //  echo "<pre>";
  //  print_r($_REQUEST);

foreach($_REQUEST as $key=>$value){


   $value = trim($value);
    // echo $key."-".$value."-";
    // echo $correctanswer."<br>";
    // echo $value."<br>";
      $correctanswer =$score->answermatch($key);
    // $answer =   $correctanswer->fetch_assoc();
    if($value == $correctanswer){
       
        $count = $count+1;
        
    }
   
}
echo $count;

$res = $question- $count;

echo "<h1> Wrong Answer <br><br>$res";
?>

</div>

</h1>





</body>

<?php include '../footer.php';?>
</html> 



