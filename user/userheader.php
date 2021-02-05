<?php

session_start();
if (!isset($_SESSION['name']) || $_SESSION['is_admin'] == "1") {
  header("location: ../logout.php");
}

?>


<nav class="navbar navbar-inverse" style="padding:10px;height:70px">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:white">CED QUIZ</a>
    </div>
    <ul class="nav navbar-nav" style="margin-left: 20px;">

      <li><a href="index.php" style="color:white">HOME</a></li>
      <li><a href="seerecords.php" style="color:white">See Your Details</a></li>
      <li><a href="index.php" style="color:white">Start Test</a></li>


      <li><a href="#" style="color:white;font-size:18px;margin-left:50px ;color:yellow">
          <?php echo "Welcome " . $_SESSION['name']; ?>
        </a></li>
    </ul>

    <button class="btn btn-danger" style="float: right;height:40px;width:120px"> <a href="../logout.php" style="color:white; font-size:15px; margin-right:40px;
     text-decoration:none; padding:15px">LOG OUT</a></button>

  </div>

</nav>