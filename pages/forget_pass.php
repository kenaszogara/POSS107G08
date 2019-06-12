<?php

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "test@hostinger-tutorials.com";
    $to = "test@gmail.com";
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
?>

<!DOCTYPE html>
    <head>
            <meta http-equiv="Content-Type" content="text/html"; carset="utf-8">
            <title>Thank You Next!</title>
            <link href="/css/forget_pass.css" rel="stylesheet" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
    </head>

    <body>
        <div class="forget">
            <form method="POST">
                <h2>Forgot Password</h2>
                <h3>Enter your email and we'll send a link to reset your password.</h3>
                <input type="text" name="email" placeholder="Enter your email" required/>
                <input type="button" value="send"/>
                <br><br>
                <a href="/scripts/index.php">Go back to Login page</a>
            </form>
        </div>
    </body>
