<html>

<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../form.css">
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="form.css">
</head>
<?php include 'adminheader.php'; ?>

<body>


    <div class="container-fluid">
        <img src="../quiz-logo_2728-12.jpg" style="width: 400px;height:450px;float:left">
        <br>
        <button type="button" class="btn btn-lg btn-primary " style="width: 20%;margin-left:200px ">
            <a href="createcategory.php" target="_blank" style="color:white; text-decoration:none;">Create Category</a>
        </button>
        <br>
        <br>
        <button type="button" class="btn btn-lg btn-primary " style="width: 20%;margin-left:200px ">
            <a href="createquestion.php" target="_blank" style="color:white; text-decoration:none;">Create Question</a>
        </button>
        <br>
        <br>
        <button type="button" class="btn btn-lg btn-primary " style="width: 20%;margin-left:200px ">
            <a href="seequestion.php" target="_blank" style="color:white; text-decoration:none;">See Questions </a>
        </button>
        <br>
        <br>
        <button type="button" class="btn btn-lg btn-primary " style="width: 20%;margin-left:200px ">
            <a href="seeuser.php" target="_blank" style="color:white; text-decoration:none;">See User Details </a>
        </button>
        <br>
        <br>
        <button type="button" class="btn btn-lg btn-primary " style="width: 20%;margin-left:200px ">
            <a href="seeuserscore.php" target="_blank" style="color:white; text-decoration:none;">See User's Scorecard</a>
        </button>
    </div>
    <?php include '../footer.php'; ?>
</body>


</html>