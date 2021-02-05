<?php
session_start();
include_once 'database/useroops.php';
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['psw'];
    $userinsert = new user();
    $userinsert->userSignup($name, $email, $password);
    echo "<script>alert('Successfully logined')</script>";
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <body>
        <link rel="stylesheet" href="form.css">
        <center>
            <h1>
                signup here 
            </h1>
            <form action="" method="post">
                <div class="container" >
                    <label for="email" style="text-align: center;"><b>
                        Email
                        </b></label>
                    <input type="text" placeholder="Enter Email" id="email" name="email"  required>
                    <br>
                    <br>
                    <div class="verified" id="verified">
                        <label for="name" style="text-align: center;"><b>
                            Name
                            </b></label>
                        <input type="text" placeholder="Enter Name" name="name" required>
                        <br>
                        <br>
                        <label for="psw" style="text-align: center;"><b>
                            Password
                            </b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
                        <br>
                    </div>
                    <button name="submit" class="hide" type="submit">SignUP</button>
                </form> 
            </center>
        </body>
    </html>