<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array();
$samplename = $celltype = $idfreezer = $rack = $position = $amount = $frozendate = $availability = '';
$errors_registration = array('username' => '', 'email' => '', 'password_1' => '', 'password_2' => '');
// connect to the database
$db = mysqli_connect('localhost', 'albert', '/Puiyuaru1616', 'mydb');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { $errors_registration['username'] = "Username is required"; }
  else { if (!preg_match('/^[a-zA-Z\s]+$/', $username)){ $errors_registration['username'] = "Your user name cannot contain special characters"; }}
  if (empty($email)) { $errors_registration['email'] = "Email is required"; }
  // if (empty($password_1)) { array_push($errors, "Password is required"); }
  else { if (strlen($password_1) <= 8 ){ $errors_registration['password_1'] = "Your password must have at least 8 characters"; }}
  if ($password_1 != $password_2) {
    $errors_registration['password_2'] = "The two passwords do not match";
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM User WHERE Username='$username' OR Email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['Username'] === $username) {
      $errors_registration['username'] = "Username already exists";
    }

    if ($user['Email'] === $email) {
      $errors_registration['email'] = "email already exists";
    }
  }

  // Finally, register user if there are no errors in the form
  if(array_filter($errors_registration)){

  } else {

  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO User (Username, Email, Password)
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}


// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password_1']);

  if (empty($username)) {
  	$errors_registration['username'] = "Username is required";
  }
  if (empty($password)) {
  	$errors_registration['password_1'] = "Password is required";
  }

  // Finally, register user if there are no errors in the form
  if(array_filter($errors_registration)){

  } else {

  	$password = md5($password);
  	$query = "SELECT * FROM User WHERE Username='$username' AND Password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		$errors_registration['password_1'] = "Wrong username/password combination";
  	}
  }
}


// NEW ENTRY
if (isset($_POST['reg_entry'])) {
  // receive all input values from the entry form
  $samplename = mysqli_real_escape_string($db, $_POST['samplename']);
  $celltype = mysqli_real_escape_string($db, $_POST['celltype']);
  // $idfreezer = mysqli_real_escape_string($db, $_POST['idfreezer']);
  $rack = mysqli_real_escape_string($db, $_POST['rack']);
  $position = mysqli_real_escape_string($db, $_POST['position']);
  // $amount = mysqli_real_escape_string($db, $_POST['amount']);
  $frozendate = mysqli_real_escape_string($db, $_POST['frozendate']);
  $availability = mysqli_real_escape_string($db, $_POST['availability']);
  $comment = mysqli_real_escape_string($db, $_POST['comment']);

  // entry validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($samplename)) { array_push($errors, "Sample name is required"); }
  if (empty($celltype)) { array_push($errors, "Cell type is required"); }
  // if (empty($idfreezer)) { array_push($errors, "Freezer is required"); }
  if (empty($rack)) { array_push($errors, "Rack is required"); }
  if (empty($position)) { array_push($errors, "Position is required"); }
  // if (empty($amount)) { array_push($errors, "Amount is required"); }
  if (empty($frozendate)) { array_push($errors, "Frozen date is required"); }

  // Finally, add the new entry in the sample table
  if (count($errors) == 0) {
  	$query = "INSERT INTO Sample (Name, Cell_type, Rack, Position, Frozendate, Availability, Comment, User_Email)
  			  VALUES('$samplename', '$celltype', '$rack', '$position', '$frozendate', '$availability', '$comment', '$email')";
  	mysqli_query($db, $query);

  }
}


?>
