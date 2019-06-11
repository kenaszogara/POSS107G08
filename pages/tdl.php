<?php 
// if no user login, 404
if ( !isset($_SESSION['username']) ) {
	header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
}

$today = date("Y-m-d");

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
            <a href="logout.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Logout</a>
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
            <a href="logout.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Logout</a>
            <a href="https://github.com/TKUIITFCChang/POSS107G08" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contact Us</a>
        </div>
    </div>


    <div class="custom-header" style="padding:128px 16px">
        <img src="https://drive.google.com/thumbnail?id=14A-oheFQ2r8PRUnuVRQH5-K2r2ypNPt4" alt="logo" class="logo" width="65px">
    </div>

    <div class="row">
        <div class="six columns">
            <div class="custom-content">
                <div class="custom-padding">
                    <h2>Add Todo</h2>
                </div>
                <div class="container">
                    <div class="custom-padding">
                        <input type='date' value='<?php echo $today; ?>' class='textbox'>
                    </div>
                    <div class="custom-padding">
                        <input type="text" placeholder="Add a to-do" autocomplete="off" required>
                    </div>
                </div>  
            </div>
        </div>

        <div class="two columns">
            <div id="container">  
                <ul>
                    <li>Sign up<span><i class="fa fa-trash"></i></span></li>
                    <li>Log in<span><i class="fa fa-trash"></i></span></li>
                    <li>Add to-dos<span><i class="fa fa-trash"></i></span></li>
                </ul>
            </div>
        </div>
    </div>
    
    
	
    <script type="text/javascript" src="../js/tdl.js"></script>
    
</body>
