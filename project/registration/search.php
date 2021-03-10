<!DOCTYPE html>
<html>
<head>
	<title>New Entry</title>
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
						<li><a href="new_entry.php">NEW ENTRY</a></li>
            <li><a href=search.php>SEARCH</a></li>
						<li><a href="#pricing">REQUESTS</a></li>
						<li><a href="contact.html">CONTACT US!</a></li>
					</ul>
				</div>
			</div>
		</div>
	 </nav>
   <div class="hero">
     <div class="jumbotron text-center" style="margin-bottom: 0px;">
         <h1>New Search</h1>
         <p>Give us some hints and we're going to find what you need</p>
     </div>
     <form action="search.php" method="post">
       <div class="input-group">
         <label>Sample name: </label>
         <input type="text" name="search" value="">
       </div>
       <div class="input-group">
         <label>Choose a freezer: </label>

       </div>
       <div class="input-group">
   	  	<button type="submit" class="btn" name="reg_entry">search</button>
   		</div>

</form>
 </body>
 </html>

 <?php
 if (isset($_POST['reg_entry'])) {
 $search_value=$_POST["search"];
 $con=new mysqli("localhost","root","welcome123","registration");
 if($con->connect_error){
     echo 'Connection Faild: '.$con->connect_error;
     }else{
         $sql="select * from sample where samplename like '%$search_value%'";

         $res=$con->query($sql);

         while($row=$res->fetch_assoc()){
             echo 'Samplename:  '.$row["idfreezer"];


             }

         }}
 ?>
