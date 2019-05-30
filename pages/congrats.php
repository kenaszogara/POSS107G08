<title>Thank You for Sign Up!</title>
<link href="/css/congrats.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
<?php session_start(); ?>
<div class="congrats">
    <h2><?= $_SESSION['message'] ?></h2>
    <a href="/index.html">Go back to Home page</a>
</div>