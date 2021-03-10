<?php include('server.php')?>
<?php
if(!isset($_SESSION)) {
				session_start();
}
if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Advanced Search</title>
    <link rel="shortcut icon" href="img/tube.png">
		<link rel="stylesheet" type="text/css" href="index.css">
	    <!-- <link rel="stylesheet" type="text/css" href="estilo.css"> -->

	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>
	<body>

		<!-- navigation bar -->
	  <nav class="navbar navbar-default navbar-fixed-top">
	    <div class="container">
	      <div class="navbar-header">
	        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="index.php">Tidy tubes</a>
	      </div>
	      <div class="collapse navbar-collapse" id="myNavbar">
	        <ul class="nav navbar-nav navbar-right">
	            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="">
	                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
	                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
	              </svg>
	              <span class="num">4</span>
	              <span class="caret"></span> </a>
	          <div class="dropdown-menu" aria-labelledby="dropdown_target">
	                <a class "dropdown-item" href="#"></a> <br>
	              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="">MY PROFILE
	              <span class="caret"></span> </a>
		          <div class="dropdown-menu" aria-labelledby="dropdown_target">
		              <a class "dropdown-item" href="#">Setings</a> <br>
		              <a class "dropdown-item" href="index.php?logout='1'" style="color: red;">Log Out</a>
		          </div>
		          </li>
		          <li><a href="#services">NEW ENTRY</a></li>
		          <li><a href="#pricing">REQUESTS</a></li>
		          <li><a href="contact.html">CONTACT US!</a></li>
		        </ul>
		      </div>
		    </div>
			</div>
		</nav>

		<div class="jumbotron text-center" style="margin-bottom: 0px;">
         <h1>Advanced Search</h1>
         <p>Can't find your cells? I bet, we can!</p>
    </div>

    <!-- Formula to enter Data for Advanced Search -->
    <div class="container">
 			 <h2>What are you looking for?</h2>
 			  <form action = "index.php">
 			     <div class="input-group">
 						 <label for="sample">Sample name: </label>
 						 <input type="text" id="Name" name="sample_name" title="Sample name"><br><br>
 			     </div>
 				</form>

 				<form action = "index.php">
 					 <div class="input-group">
 						 <label for="sample">Cell type: </label>
 						 <input type="text" id="cell_type" name="cell_type" title="Cell type"><br><br>
 					 </div>
 				</form>

        <form action = "index.php">
           <div class="input-group">
            <label for="freezer">Look in specific freezer: </label>
            <select name="freezer" id="freezer">
              <option value="all">All Freezers</option>
              <option value="freezer_id1">Freezer 01</option>
              <option value="freezer_id2">Freezer 02</option>
              <option value="freezer_id3">Freezer 03</option>
              <option value="freezer_id4">Freezer 04</option>
            </select>
          </div>
        </form>

 				<form action = "index.php">
 					 <div class="input-group">
 						 <label for="date">Frozen on the: </label>
 						 <input type="date" id="date" name="date" value="31.03.2021" title="Date"><br><br>
 					 </div>
 				</form>

 				<form action = "index.php">
 					<p>Cells available for:</p>

 						<div>
 						  <input type="radio" id="huey" name="drone" value="huey"
 						         checked>
 						  <label for="huey">Private: Just you can access the entry</label>
 						</div>

 						<div>
 						  <input type="radio" id="dewey" name="drone" value="dewey">
 						  <label for="dewey">Semi-privat: Others have to ask permission</label>
 						</div>

 						<div>
 						  <input type="radio" id="louie" name="drone" value="louie">
 						  <label for="louie">Public: Everyone may access the entry</label>
 						</div>

 						<div class="input-group">
 		 				 <input type="submit">
 		 			 </div>

 				</form>
 		</div>
