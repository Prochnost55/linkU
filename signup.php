<?php
  session_start();
  if (isset($_SESSION["username"])){
        header("location:userpage.php");
         }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>LinkU-SignUp</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="css/signup.css" rel="stylesheet">

    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
 	 <body style="background-color: #eee;">
    <div class="container">
      <?php
          if (isset($_GET["message"])){
            $message = $_GET["message"];
            if ($message == "1472"){
              
                echo("<div class='alert alert-danger' role='alert'>");
                echo("<strong>Sorry!</strong> Something went wrong. Try different email address.</div>");
            }
          }
   ?>
   
		
    <div style="border: 1px solid lightgrey;padding: 10px; max-width: 400px; font-weight: normal; margin: 0 auto; margin-top: 50px; background-color: #FFFFFF;">
		
			<center><h1>Enter Your Details</h1></center>
			<form class="form-signup" action="SignUpProcess.php" method="post" autocomplete="off">
		
		<label for="inputName" class="sr-only">Name</label>
        <input type="text" name="Name"  id="inputName" class="form-control" placeholder="Full Name" required autofocus >

         <div class="checkbox">
         <h4>Gender</h4>
          <label>
            <input type="radio" name="gender" value="Male"> Male 
          </label>
          <label>
          	<input type="radio" name="gender" value="Female"> Female
          </label>
          <label>
            <input type="radio" name="gender" value="Others"> Others
          </label>
        </div>

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" name="Email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus >
        
       
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required ></br>
      
      	<button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
      	<a href="index.php">Already Singed Up</a>
			</form>
		</div>
			
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>


