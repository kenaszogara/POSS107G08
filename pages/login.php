<?php 
    session_start();
    $_SESSION['message'] = '';
    $mysqli = mysqli_connect('localhost', 'admin', 'admin', 'user');

    //check connection to mysql
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $mysqli->real_escape_string($_POST['username']);
        $password = md5($_POST['password']); //md5 hash protection

        $check_account = "SELECT * FROM accounts where (username='$username' and pass='$password')";
        $respond = mysqli_query($mysqli, $check_account);

        // if exist in database login
        if(mysqli_num_rows($respond) > 0){
            header("location: /pages/tdl.html");
            mysqli_close($mysqli);
        } else {
            echo '<script type="text/javascript">alert("Account does not exist")</script>';
        }
    }

?>

<title>Thank You Next</title>
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
<link rel="stylesheet" href="/css/login.css">
<div class="signin">
    <form method="post">
        
        <h2 style="color: white">Login</h2>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password"> <br><br>

        <input type="submit" value="Log In">

        <div id="container">
            <a href="/pages/reset_pass.html">Reset password</a>
            <a href="/pages/forget_pass.html">Forgot password</a>
        </div><br><br><br><br><br><br>
        Dont't have account?<a href="/pages/signup.php">&nbsp;Sign Up</a>
    </form>
</div>