<?php 
session_start();
require_once "../scripts/db.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $mysqli->real_escape_string($_POST['username']);
    $password = md5($_POST['password']); //md5 hash protection

    $check_account = "SELECT * FROM accounts where (username='$username' and pass='$password')";
    $result = mysqli_query($mysqli, $check_account);

    if(mysqli_num_rows($result) > 0){
        // keep username in session
        $_SESSION['username'] = $username;
    } else {
        echo '<script type="text/javascript">alert("Wrong credentials! Please check again!")</script>';
        header('refresh:0; url=/pages/reset_pass.php?username='.$username); // redirect to reset_pass page
    }

    if($_POST['new_password'] == $_POST['confirm_password']){
        
        $new_password = md5($_POST['new_password']); //md5 hash protection
        $sql = "UPDATE accounts SET pass='$new_password' WHERE username='$username'";

        if($mysqli->query($sql)){
            echo '<script type="text/javascript">alert("Password changed successfully!")</script>';
            header('refresh:0; url=/pages/login.html'); // redirect to reset_pass page
        }
    }else{
        echo '<script type="text/javascript">alert("Password Confirmation failed! Please try again!")</script>';
        header('refresh:0; url=/pages/reset_pass.php?username='.$username); // redirect to reset_pass page
    }
}
session_destroy();
?>

<style>
    a{
        margin-right:0px;
        font-size:13px;
        font-family:Tahoma, Geneva, san-serif;
        color: yellow;
        text-decoration: blink;
    }

    a:hover{
        color: darkblue;
    }

    .container{
        display: flex;
        flex-direction: row;
        width: 100%;
    }
</style>

<!DOCTYPE html>
    <head>
        <meta http-equiv="Content-Type" content="text/html"; carset="utf-8">
        <title>Thank You Next!</title>
        <link href="/css/signup.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
    </head>
            
    <body>
        <div class="signup">
            <form method="POST">
               <h2>Reset Password</h2>
               <input type="text" name="username" placeholder="Username">
               <br><br>
               <input type="password" name="password" placeholder=" Old Password">
               <br><br>
               <input type="password" name="new_password" placeholder="New Password">
               <br><br>
               <input type="password" name="confirm_password" placeholder="Confirm New Password">
               <br><br>
               <input type="submit" value="save">
               <br><br>
               <div id="container">
                    <a href="/scripts/index.php">Go Back to Login Page</a>
                </div><br><br><br><br><br><br>
           </form>
        </div> 
    </body>
</html>