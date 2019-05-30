<?php 
    session_start();
    $_SESSION['message'] = '';
    $mysqli = mysqli_connect('localhost', 'admin', 'admin', 'user');

    //check connection to mysql
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    //process post
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // if password and confirm_password are equal process data...
        if ($_POST['password'] == $_POST['confirm_password']){
            $username = $mysqli->real_escape_string($_POST['username']);
            $password = md5($_POST['password']);
            $email = $mysqli->real_escape_string($_POST['email']);

            $sql = "INSERT INTO accounts (username, password, email) VALUES ('$username','$password', '$email')";
            if ($mysqli->query($sql)) {
                $_SESSION['message'] = "Congratulations you have sign up successfully! Welcome $username!";
                header("location: /pages/congrats.php");
            } else {
                $_SESSION['message'] = "User could not be added to the database!";
            }

        } else {
            $_SESSION['message'] = "Password confirmation failed!";
        }
    }

?>

<title>Sign Up!</title>
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
<link rel="stylesheet"href="/css/signup.css">
<div class="signup">
    <form method="post">
        <h2>Sign Up</h2>
        <div><?= $_SESSION['message'] ?></div>
        <input type="text" name="username" placeholder="Username" required>
        <br><br>
        <input type="password" name="password" placeholder="Password" required>
        <br><br>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
        <br><br>
        <input type="email" name="email" placeholder="Email address" required>
        <br><br>
        <input type="submit" value="Sign Up" class="button">
        <br><br>
    </form>
</div>

