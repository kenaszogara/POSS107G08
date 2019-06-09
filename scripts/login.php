<?php 
session_start();

require_once "db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $mysqli->real_escape_string($_POST['username']);
    $password = md5($_POST['password']); //md5 hash protection

    $check_account = "SELECT * FROM accounts where (username='$username' and pass='$password')";
    $result = mysqli_query($mysqli, $check_account);

    // if exist in database login
    if(mysqli_num_rows($result) > 0){
        // keep username in session
        $_SESSION['username'] = $username;
        header('refresh:0; url=/pages/tdl.php?username='.$username); // redirect to tdl home page

    } else {
        echo '<script type="text/javascript">alert("Wrong credentials! Please check again!")</script>';
        header('refresh:0; url=/scripts/index.php?username='.$username); // redirect to login page
    }
}

?>

<body style="background: #1B4A47"></body>
