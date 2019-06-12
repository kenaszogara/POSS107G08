<?php 
session_start();

require_once "../scripts/db.php";

$_SESSION['message'] = '';
$visible = 'none';

if ( !isset($_POST['username']) AND !isset($_POST['email']) ) {
    $_POST['username'] = '';
    $_POST['email'] = '';
}


//if theres POST request process it
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // if password and confirm_password are equal process data...
    if ($_POST['password'] == $_POST['confirm_password']){
        
        // assign post data
        $username = $mysqli->real_escape_string($_POST['username']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $password = md5($_POST['password']); //md5 hash protection

        // check if username & password already exist...
        $check_user_email = "SELECT * FROM accounts WHERE (username='$username' or email='$email')";
        $respond = mysqli_query($mysqli, $check_user_email);

        // if exists print alert message...
        if (mysqli_num_rows($respond) > 0) {
            $row = mysqli_fetch_assoc($respond);

            if($username == $row['username']){

                $_SESSION['message'] = "Username already exist, Please choose other username";
                $visible = 'block';
                close_all($respond, $mysqli);

            } elseif ($email == $row['email']) {

                $_SESSION['message'] = "Email already exist, Please use other email";
                $visible = 'block';
                close_all($respond, $mysqli);

            }

        // else query data...
        } else {    
            
            $sql = "INSERT INTO accounts (username, pass, email) VALUES ('$username','$password', '$email')";
            
            if ($mysqli->query($sql)) {
                // dsiplay congrats message
                $_SESSION['message'] = "Congratulations you have successfully sign up! Welcome $username!";
                $visible = 'block';

                header("location: /pages/congrats.php");

            } else {

                $_SESSION['message'] = "User could not be added to the database!";
                $visible = 'block';
            }
        }

    } else {

        $_SESSION['message'] = "Password confirmation failed!";
        $visible = 'block';
    }
}

function close_all($respond, $mysqli) {
    mysqli_free_result($respond);
    mysqli_close($mysqli);
    return null;
}

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

<title>Sign Up!</title>
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
<link rel="stylesheet" href="/css/signup.css">
<div class="signup">
    <form method="post">
        <h2>Sign Up</h2>
        <!-- alert box -->
        <div class="alert" style="display: <?= $visible ?>">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <strong><?= $_SESSION['message'] ?></strong>
        </div>
        <input type="text" name="username" value="<?= $_POST['username'] ?>" placeholder="Username" required>
        <br><br>
        <input type="password" name="password" placeholder="Password" required>
        <br><br>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
        <br><br>
        <input type="email" name="email" value="<?= $_POST['email'] ?>" placeholder="Email address" required>
        <br><br>
        <input type="submit" value="Sign Up">
        <br><br>
        <div id="container">
                    <a href="/scripts/index.php">Go Back to Login Page</a>
                </div><br><br><br><br><br><br>
    </form>
</div>

