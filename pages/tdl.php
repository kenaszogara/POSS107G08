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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Sahitya' rel='stylesheet'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- pleas put all the .css file link below this tag-->
    <link rel="stylesheet" href="/css/tdl.css">

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

	<div id="date"><br>
		<input type='date' id='hasta' value='<?php echo $today; ?>' class='textbox'>
	</div>
	<div class="container">
		<div class="header">
			<div class="add-to-do">
				<p class="fas fa-plus-circle"></p>
				<input type="text" id="input" placeholder="Add a to-do" autocomplete="off" autofocus>
			</div>
		</div>
	</div>
</body><br>
<div>
	<a href="logout.html">
		<input type="button" value="Log Out">
	</a>
</div>
