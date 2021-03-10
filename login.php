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


<!-- login -->
<br>
<br>
<br>
<br>

    <div class="content__outer">
       <div class="content__inner">
         <!-- <div class="container"> -->
           <div class="row">
             <div class="col-lg-6 m-auto">
               <form method="post" action="login.php" class="password-strength form p-4">
                 <h3 class="form__title text-center mb-4">LOG IN</h3>
                 <div class="form-group">

                 <div class="input-group">
                     <label for="password-input">Username</label>
                   <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Mr_Clean"/>
                   <div style="color:red" ><?php echo $errors_registration['username']; ?></div>

                 <div class="input-group">
                     <label for="password-input">Password</label>
                 </div>
                   <div class="input-group">
                     <input name="password_1" class="password-strength__input form-control" type="password" id="password-input" aria-describedby="passwordHelp" placeholder="Enter password"/>
                 <div class="input-group-append">
                   <button class="password-strength__visibility btn btn-outline-secondary" type="button"><span class="password-strength__visibility-icon" data-visible="hidden"><i class="fas fa-eye-slash"></i></span><span class="password-strength__visibility-icon js-hidden" data-visible="visible"><i class="fas fa-eye"></i></span></button>
                 </div>             </div>

                 <div style="color:red"><?php echo $errors_registration['password_1']; ?></div>

                 <button type="submit" class="btn btn-success" name="login_user">Login</button>
                 <br>
                 <br>
                 <p>
                     New arround here?
                      <a style="color:blue" href="register.php">Create an account</a>
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

<!-- style login -->
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

  <!-- <div class="header">
  	<h2>Login</h2>
  </div> -->

  </form>
</body>
</html>
