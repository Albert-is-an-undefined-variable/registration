<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link href="https://fonts.googleapis.com/css?family=Muli:400,600&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>
    <!-- <div class="container_menu-bar">
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
            </div>
         </nav>
  <div class="">
                  <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#">
                    <img src="img/epp.png" width="32" height="28" class="d-inline-block align-top" alt="">ube managment
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              </nav>
            </div>

        <div class="hero"> -->


	<?php include('error.php'); ?>

    <!-- resgistration -->
    <br>
    <br>
    <br>
    <br>
    </nav>
<div class="content__outer">
   <div class="content__inner">
       <div class="row">
         <div class="col-lg-6 m-auto">
           <form method="post" action="register.php" class="password-strength form p-4">
             <h3 class="form__title text-center mb-4">Please introduce your data</h3>
             <div class="form-group">

             <div class="input-group">
                 <label for="password-input">Username</label>
               <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Mr_Clean"/>
               <div style="color:red" ><?php echo $errors_registration['username']; ?></div>

               <div class="input-group">
                <label for="password-input">Email</label>
                 <input type="email" name="email" value="<?php echo $email; ?>" placeholder="tidytubes@gmail.com"/>
             </div>
             <div style="color:red"><?php echo $errors_registration['email']; ?></div>

             <div class="input-group">
                 <label for="password-input">Password</label>
             </div>
               <div class="input-group">
                 <input name="password_1" class="password-strength__input form-control" type="password" id="password-input" aria-describedby="passwordHelp" placeholder="Enter password"/>
             <div class="input-group-append">
               <button class="password-strength__visibility btn btn-outline-secondary" type="button"><span class="password-strength__visibility-icon" data-visible="hidden"><i class="fas fa-eye-slash"></i></span><span class="password-strength__visibility-icon js-hidden" data-visible="visible"><i class="fas fa-eye"></i></span></button>
             </div>             </div>

             <div style="color:red"><?php echo $errors_registration['password_1']; ?></div>

             <div class="input-group">
                 <label for="password-input">Repeat your password</label>
             </div>
                 <div class="input-group">
                   <input  name="password_2" class="password-strength__input form-control" type="password" id="password-input" aria-describedby="passwordHelp" placeholder="Repeat your password"/>
               </div>
               <div style="color:red" ><?php echo $errors_registration['password_2']; ?></div>



           </div><small class="password-strength__error text-danger js-hidden">This symbol is not allowed!</small><small class="form-text text-muted mt-2" id="passwordHelp">Add 9 charachters or more, lowercase letters, uppercase letters, numbers and symbols to make the password as strong as your research!</small>
             </div>
             <div class="password-strength__bar-block progress mb-4">
               <div class="password-strength__bar progress-bar bg-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
             </div>
             <button name="reg_user" class="password-strength__submit btn btn-success d-flex m-auto" type="submit" disabled="disabled">Submit</button>
             <br>
             <p>
                 Already a member?
                  <a style="color:blue" href="login.php">Sign in</a>
             </p>
           </form>
           </div>
       </div>
     </div>
   </div>
 </div>


 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js'></script>
 <script  src="java.js"></script>


<!-- Style for the login -->
<style media="screen">
* {
  margin: 0;
  padding: 0;
  /* box-sizing: border-box; */
}
body {
  font-family: 'Muli', sans-serif;
  font-size: 16px;
  color: #2c2c2c;
}
body a {
  color: inherit;
  text-decoration: none;
}
.content{
  width: 100%;
  margin: 0;
  margin-top: 15%;
}
.col-lg-6 {
    /* width: 100%; */
    height: auto;
    width: auto;
}
.password-strength {
  box-shadow: 0 4px 5px 0 rgba(0, 0, 0, 0.14), 0 1px 10px 0 rgba(0, 0, 0, 0.12), 0 2px 4px -1px rgba(0, 0, 0, 0.3);
}
.js-hidden {
  display: none;
}
.btn-outline-secondary {
  color: #28a745;
  border-color: #28a745;
}
.btn-outline-secondary:hover {
  background: #28a745;
}
</style>




  <!-- <form method="post" action="register.php">
  	<?php include('error.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>

  </form> -->
  </div>
  </div>

</body>
</html>
