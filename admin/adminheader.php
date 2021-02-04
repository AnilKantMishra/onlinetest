<?php


if(!isset($_SESSION['name'])||$_SESSION['is_admin']=="0"){
    header("location: ../logout.php");
}


?>
<nav class="navbar navbar-inverse"style="padding:15px;font-size:14px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:white">CED QUIZ</a>
    </div>
    <ul class="nav navbar-nav" style="margin-left: 20px;">
     
      <li><a href="index.php" style="color:white">HOME</a></li>
      <li><a href="createcategory.php" style="color:white">CREATE CATEGORY</a></li>
      <li><a href="createquestion.php"style="color:white">CREATE QUESTION</a></li>
      <li><a href="seequestion.php"style="color:white">SEE QUESTION</a></li>
      <li><a href="seeuser.php"style="color:white">SEE USER LIST</a></li>
   
      
<li class="dropdown"> 
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
									aria-haspopup="true" aria-expanded="false" style="color:white">Category Available<i class="caret"></i></a>
								<ul class="dropdown-menu" >
								<?php
              include_once '../database/adminoops.php';
              $userlogin = new admin();
											$res = $userlogin->nav();
											$row = $res->num_rows;
											for($i=0;$i<$row;$i++){
												   $resultobj = $res->fetch_assoc();
												   ?>
				<li style="margin-left:30px;color:green">    <?php  echo $resultobj['cat_name'];
				?></li>
												 
<?php
											}
			
											?>
			
							
								</ul>
              </li>
              <li><a href="#" style="color:white;font-size:18px;margin-left:50px ;color:yellow">     
      <?php echo "Welcome " .$_SESSION['name'];?>   
</a></li>
    </ul>
    
    <a href="../logout.php" style="float: right; color:white; font-size:20px; margin-right:20px;
     text-decoration:none; padding:15px">Log Out </a>
 
  </div>

</nav>
