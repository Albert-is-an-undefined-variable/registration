<?php include('server.php')?>
<?php
  session_start();

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
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="index_style.css">
  <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>
  <div class="menu-bar">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="#">
        <img src="epp.png" width="32" height="28" class="d-inline-block align-top" alt="">
            ube managment
     </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Requests</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Settings</a>
        </li>
      </ul>
    </div>
  </nav>
</div>

  <div class="header">
	   <h2>Home Page</h2>
     <button type='button'>Button</button>
   </div>


   <div class="content">
  	  <!-- notification message -->
  	   <?php if (isset($_SESSION['success'])) : ?>
         <div class="error success" >
      	    <h3>
              <?php
          	   echo $_SESSION['success'];
          	    unset($_SESSION['success']);
                ?>
      	    </h3>
          </div>
  	     <?php endif ?>

         <!-- logged in user information -->
         <?php  if (isset($_SESSION['username'])) : ?>
    	      <!---<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>--->
    	       <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
           <?php endif ?>
           <form method = "post" action = "new_entry.php">
             <div class="input-group">
               <button type="submit" class="btn" name="entry">Add entry</button>
             </div>

          <form method = "post" action = "projects.php">
               <div class="input-group">
                 <label>Projects</label>
                 <input type="submit" />
               </div>



  </div>
</body>
</html>
