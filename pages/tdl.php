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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <!-- pleas put all the .css file link below this tag-->
    <link rel="stylesheet" href="/css/tdl.css">

</head>
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
