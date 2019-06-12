<?php 
session_start();

if(isset($_SESSION['username'])){
    header("location: /pages/tdl.php");
}

?>

<title>Thank You Next</title>
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
<link rel="stylesheet" href="/css/login.css">

<div class="signin">
    <form action="/scripts/login.php" method="POST">
        <h2 style="color: white">Login</h2>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password"> <br><br>

        <input type="submit" value="Log In">

        <div id="container">
            <a href="/pages/reset_pass.php">Reset password</a>
        </div><br><br><br><br><br><br>
        Dont't have account?<a href="/pages/signup.php">&nbsp;Sign Up</a>
    </form>
</div>