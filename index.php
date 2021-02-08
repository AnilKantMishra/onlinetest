<?php

session_start();
include 'database/useroops.php'; ?>

<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['psw'];
    $userlogin = new user();
    $res = $userlogin->login($email, $password);
}
?>


<html>

<head>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <img src="quiz-logo_2728-12.jpg" style="width: 400px;height:450px;float:left">
    <br>
    <center>
        <br>
        <strong>
            <p style="font-size: 30px;">
                Login Here
            </p>
        </strong>
        <form action="" method="post">
            <div class="container">
                <label for="email"><b>
                        Email
                    </b></label>
                <input type="text" placeholder="Enter Email" name="email" required>
                <br>
                <br>
                <label for="psw"><b>
                        Password
                    </b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                <br>
                <br>
                <button name="submit" type="submit" style="border-radius: 15px;color:white;font-size:20px">LOGIN</button>
                <br>
                <br>
                <a href="signupfull.php" style="text-decoration: none;font-size:20px">New user?? Sign up here</a>
            </div>
        </form>
    </center>
</body>
<?php include 'footer.php'; ?>

</html>