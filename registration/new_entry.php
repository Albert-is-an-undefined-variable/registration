<?php include('server.php') ?>
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
						<li><a href="#services">NEW ENTRY</a></li>
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
		          <h1>New Entry</h1>
		          <p>Add your tubes to the system, before you forget where you put them!</p>
		      </div>
					<div class="container">
						<form method="post" action="new_entry.php">
							<?php include('error.php'); ?>
							<h2>Enter the details of your sample</h2>
							<div class="input-group">
								<label>Sample name:</label>
								<input type="text" name="samplename" value="<?php echo $samplename; ?>">
							</div>
							<div class="input-group">
								<label>Cell Type:</label>
								<input type="text" name="celltype" value="<?php echo $celltype; ?>">
							</div>
							<div class="input-group">
								<label>Choose a freezer:</label>
								<select name="idfreezer">
									<option value="freezer_id1">Freezer 01</option>
									<option value="freezer_id2">Freezer 02</option>
									<option value="freezer_id3">Freezer 03</option>
									<option value="freezer_id4">Freezer 04</option>
								</select>
  					</div>
						<div class="input-group">
							<label>Rack:</label>
  	  				<input type="text" name="rack" value="<?php echo $rack; ?>">
  					</div>
						<div class="input-group">
  	  				<label>Position:</label>
  	  				<input type="text" name="position" value="<?php echo $position; ?>">
  					</div>
						<div class="container">
							<div class="input-group">
  	  					<label><p><strong>Cannot find the right Freezer?</strong>Connect your account to a new freezer using its freezer ID.</p></label>
  	  					<input type="text" name="" value="">
							</div>
  					</div>
						<div class="input-group">
  	  				<label>Quantity of tubes:</label>
  	  				<input type="number" name="amount" value="<?php echo $amount; ?>">
  					</div>
						<div class="input-group">
  	  				<label>Frozen on the: </label>
  	  				<input type="text" name="frozendate" value="<?php echo $frozendate; ?>">
  					</div>
						<div class="input-group">
  	  				<label>Select the availability for your tubes</label>
							<select name="availability">
								<option value="privat">Privat</option>
								<option value="semiprivat">Semiprivat</option>
								<option value="public">Public</option>
							</select>
  				</div>
					<div class="input-group">
  	  			<label>Add a note:</label>
						<textarea input type="text" rows="10" cols="50" name="comment" value="<?php echo $comment; ?>">Protocol, genetically modified, project XY ...</textarea>
  			</div>
  		<div class="input-group">
  	  	<button type="submit" class="btn" name="reg_entry">Add entry</button>
  		</div>
  		</form>
  	</div>
		<div class="container">
			<h3>How it works:</h3>
				<p>Use this form to add the tubes you froze. You can choose, how others see your entries in the search field. <br>
				<strong>Private:</strong> Just you can access the entry<br>
				<strong>Semi-privat:</strong> Others have to ask permission<br>
				<strong>Public:</strong> Everyone may access the entry</p>
		</div>

  </div>
</body>
</html>
