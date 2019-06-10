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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link href='https://fonts.googleapis.com/css?family=Sahitya' rel='stylesheet'>
<<<<<<< HEAD
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
=======
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
>>>>>>> 191b3fb565adc9604f02c3c986e645224bdccb79

    <!-- pleas put all the .css file link below this tag-->
    <link rel="stylesheet" href="/css/tdl.css">

</head>
<<<<<<< HEAD

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

=======
<header>
<img src="https://drive.google.com/thumbnail?id=14A-oheFQ2r8PRUnuVRQH5-K2r2ypNPt4" alt="logo" class="logo" width="65px">
<nav>
    <ol>
	<li><a href="about.html">About</a></li>
	<li><a href="about.html">How It Works</a></li>
	<li><a href="tdl.html">Home</a></li>
	<li><a href="https://github.com/TKUIITFCChang/POSS107G08">Contact Us</a></li>
	<li><a href="logout.html">Log out</a></li>
    </ol>
</nav>
</header>
<body>
>>>>>>> 191b3fb565adc9604f02c3c986e645224bdccb79
	<div id="date"><br>
		<input type='date' value='<?php echo $today; ?>' class='textbox'>
	</div>
	<div id="container">
		<input type="text" placeholder="Add a to-do" autocomplete="off" autofocus>
		<ul>
			<li>Sign up<span><i class="fa fa-trash"></i></span></li>
			<li>Log in<span><i class="fa fa-trash"></i></span></li>
			<li>Add to-dos<span><i class="fa fa-trash"></i></span></li>
		</ul>
	</div>
	<script type="text/javascript" src="js/tdl.js"></script>
</body>
