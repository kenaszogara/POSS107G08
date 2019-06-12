<?php 
// if no user login, 404
session_start();

require_once "../scripts/db.php";

if(!isset($_SESSION['username'])){
    header('location: /pages/login.html');
}

if (isset($_GET['del_task'])) {
	$id = $_GET['del_task'];

	mysqli_query($mysqli, "DELETE FROM tasks WHERE id=".$id);
	header('location: tdl.php');
}

$username = $_SESSION['username'];

$accounts = mysqli_query($mysqli, "SELECT user_id FROM accounts WHERE (username='$username')" );

$a_row = mysqli_fetch_array($accounts);

$userID = $a_row['user_id'];

// insert a tasks if submit button is clicked
if (isset($_POST['task'])) {
    $task = $_POST['task'];
    $stmt = "INSERT INTO tasks (description, user_id) VALUES ('$task', '$userID')";
    mysqli_query($mysqli, $stmt);
}

?>

<!DOCTYPE html>
<head>
    <title>To Do List</title>
    <!-- fonts cdns put below this tag -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link href='https://fonts.googleapis.com/css?family=Sahitya' rel='stylesheet'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- pleas put all the .css file link below this tag-->
    <link rel="stylesheet" href="../css/tdl.css">
    <link rel="stylesheet" href="../css/skeleton.css">
    <link rel="stylesheet" href="../css/normalize.css">

</head>

<style>
    body {
        line-height: 1.5;
        font-family: "Montserrat";
        font-size: 16px;
    }
    .custom-navbar {
        background-color: #1B4A47;
        font-family: "Montserrat", sans-serif;
        color: #fff;
        text-align: left;
        box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
        width: 100%;
        overflow: hidden;
        font-size: 18px;
    }

    .custom-header{
        padding: 0.01em 16px;
        color: #fff;
        background-color: #1B4A47;
        text-align: center;
        font-family: "Montserrat", sans-serif;
        font-size: 34px;
    }

    .content-view{
        padding: 18px;
    }

    .custom-content{
        width: 400px;
        box-shadow: 0 0 3px rgba(0,0,0, .5);
        font-size: 19px;
        margin: 40px auto;
        padding: 12px;
        background: #BE624C;
    }
    .custom-padding{
        padding: 8px;
    }
    h2{
        color: white;
    }
    table {
        width: 50%;
        margin: 30px auto;
        border-collapse: collapse;
    }

    tr {
        border-bottom: 1px solid #cbcbcb;
    }

    th {
        font-size: 19px;
        color: #6B8E23;
    }

    th, td{
        border: none;
        height: 30px;
        padding: 2px;
    }

    tr:hover {
        background: #E9E9E9;
    }

    .row{
        margin: auto;
    }

    
</style>

<body>

    <!-- Navbar -->
    <div class="w3-top">
        <div class="custom-navbar">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red"
                href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i
                    class="fa fa-bars"></i></a>
            <a href="/index.html" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
            <a href="https://github.com/TKUIITFCChang/POSS107G08" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contact Us</a>
            <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Logout</a>
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
            <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Logout</a>
            <a href="https://github.com/TKUIITFCChang/POSS107G08" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contact Us</a>
        </div>
    </div>


    <div class="custom-header" style="padding:128px 16px">
       <h1>Welcome <?=$_SESSION['username']?>!</h1>
    </div>

    <div class="row">
        <div class="six columns">
            <div class="custom-content">
                <div class="custom-padding">
                    <h2>Add Todo</h2>
                </div>
                <div class="container">
                    <div class="custom-padding">
                        <form action="tdl.php" method="POST" style="padding: 8px">
                        <input name="task" type="text" placeholder="Add a to-do" autocomplete="off" required>
                        <input class="button-primary" type="submit" value="ADD">
                        </form>
                    </div>
                </div>  
            </div>
        </div>

        <div class="two columns">
            <div id="todo-lists" style="display: table">  
                <table>
                    <thead>
                        <tr>
                            <th>N</th>
                            <th>Tasks</th>
                            <th style="width: 60px;">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                        // select all tasks if page is visited or refreshed
                        $tasks = mysqli_query($mysqli, "SELECT * FROM tasks where user_id='$userID' ");

                        $i = 1; while ($row = mysqli_fetch_array($tasks)) { ?>
                            <tr>
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $row['description']; ?> </td>
                                <td> 
                                    <a href="tdl.php?del_task=<?php echo $row['id'] ?>">x</a> 
                                </td>
                            </tr>
                        <?php $i++; } ?>	
                    </tbody>
                </table>
            </div>
        </div>
    </div>
	
    <script type="text/javascript" src="../js/tdl.js"></script>
    
</body>
