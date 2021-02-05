<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="jquery-3.5.1.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <link rel="stylesheet" href="user.css">
</head>

<body oncontextmenu="alert('You are trying to cheat here!');return false;" onkeypress="alert('You are trying to cheat!');return false;" oncopy="{return alert('You are trying to copy !!');}" onpaste="{return alert('You are trying to cheat here!');}">
  <?php include 'userheader.php'; ?>
  <?php

  $id =   $_GET['id'];
  $_SESSION['catid'] = $id;
  $catname =   $_GET['name'];

  $_SESSION['quizname'] = $catname;

  include '../database/useroops.php';
  $userlogin = new user();
  $res = $userlogin->questionshow($id);

  ?>
  <div class="container">
    <u>
      <h1>
        <?php echo $catname . " " . " "  ?> Quiz Start HERE:
      </h1>
    </u>
    <h2>
      Time Left
      <button id="counter"> </button>
  </div>
  <form id="regForm" action="action_page.php">
    <!-- One "tab" for each step in the form: -->
    <?php
    include_once '../database/useroops.php';
    $userlogin = new user();
    $result = $userlogin->questionshow($id);
    if ($result == "1") {
      echo "<script>  alert('Currently The Quiz is not available!!!')</script>";
      echo "<script>  window.location.href='index.php'</script>";
    } else {
      $row1 = $result->num_rows;
      $_SESSION['questionrow']  = $row1;
      for ($i = 0; $i < $row1; $i++) {
        $row = $result->fetch_assoc();
        echo '
<div class="tab">
<h3>'  . $row['question'] . '</h3>
<input  type="radio" id="#txtInput" name="' . $row['id'] . '" value=" ' . $row['Option1'] . '"required
>&nbsp; ' . $row['Option1'] . '<br>
<input  type="radio" id="#txtInput" name="' . $row['id'] . '" value=" ' . $row['Option2'] . '"required>&nbsp; ' . $row['Option2'] . '<br>
<input  type="radio" id="#txtInput" name="' . $row['id'] . '" value=" ' . $row['Option3'] . '"required>&nbsp; ' . $row['Option3'] . '<br>
<input  type="radio" id="#txtInput" name="' . $row['id'] . '" value=" ' . $row['Option4'] . '"required>&nbsp; ' . $row['Option4'] . '<br>
</div>
</div>
';
      }
    }
    ?>
    <!-- <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
<p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p> -->
    <div style="overflow:auto;">
      <div style="float:right;">
        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
      </div>
    </div>
    <div class="row">
      <div style="text-align:center;margin-top:40px;">
        <?php
        for ($i = 0; $i < $row1; $i++) {
          echo '
<span class="step"></span>
';
        }
        ?>
      </div>
    </div>
  </form>
</body>
<script>
  var currentTab = 0;
  // Current tab is set to be the first tab (0)
  showTab(currentTab);
  // Display the current tab
  function showTab(n) {
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    if (n == 0) {
      document.getElementById("prevBtn").style.display = "none";
    } else {
      document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
      document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
      document.getElementById("nextBtn").innerHTML = "Next";
    }
    fixStepIndicator(n)
  }

  function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
      // ... the form gets submitted:
      document.getElementById("regForm").submit();
      return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
  }

  function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
      // If a field is empty...
      if (y[i].value == "") {
        // add an "invalid" class to the field:
        y[i].className += " invalid";
        // and set the current valid status to false
        valid = false;
      }
    }
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
      document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid;
    // return the valid status
  }

  function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
      x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
  }
</script>
<script>
  // for 5 min count down
  function countdown(minutes) {
    var seconds = 60;
    var mins = minutes

    function count() {
      var counter = document.getElementById("counter");
      var current_minutes = mins - 1
      seconds--;
      counter.innerHTML = current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
      if (seconds > 0) {
        setTimeout(count, 1000);
      } else {
        if (mins > 1) {
          countdown(mins - 1);
        } else {
          alert("Oops!------ Test Submitted ");
          document.getElementById("regForm").submit();
        }
      }
    }
    count();
  }
  // take min here
  countdown(5);
</script>
<?php include '../footer.php'; ?>

</html>