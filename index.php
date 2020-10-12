<?php
  session_start();
  if (isset($_SESSION["username"])){
        header("location:userpage.php");
         }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Prochnost">
    <link rel="icon" href="favicon.ico">

    <title>LinkU-Signin</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  
</head>

<body style="background-color: #eee;">

<div class="container">

	<?php
          if (isset($_GET["message"])){
            $message = $_GET["message"];
              
                if ($message == "1234"){
                    echo("<div class='alert alert-success' role='alert'>");
                    echo("<strong>Well done!</strong> You successfully created your account.</div>");
                }
                elseif ($message == "6789"){
                    echo("<div class='alert alert-danger' role='alert'>");
                    echo("<strong>Sorry!</strong> Something is wrong. Please try again.</div>");
                }
                elseif ($message == "0000"){
                    echo("<div class='alert alert-info' role='alert'>");
                    echo("You have been logged out.</div>");
                }
                elseif ($message == "0050"){
                    echo("<div class='alert alert-warning' role='alert'>");
                    echo("You have to login first</div>");
                }
          }
      ?>
	
	<div style="border: 1px solid lightgrey;padding: 10px; max-width: 300px; font-weight: normal; margin: 0 auto; margin-top: 50px; background-color: #FFFFFF;">
		<h2 style="font-weight: lighter;">Please Sign-in</h2><hr>
		<form  method="post" action="SignInProcess.php" role="form" autocomplete="off">
			<div class="form-group">
				<br>
				<input type="text" class="form-control" 

					style=" margin-bottom: -1px; 
							border-bottom-left-radius: 0px; 
							border-bottom-right-radius: 0px; " 
					placeholder="Username" required="" autofocus=""  name="email" id="InputEmail">
				<input type="password" class="form-control" style="border-top-left-radius: 0px; border-top-right-radius: 0px;" placeholder="Password" required="" name="password" id="InputPassword"><br>
				<p class="help-block">
				<a href="ForgotPassword.php">Forgot Password?</a><br>
				<a href="Signup.php">New Here?Signup Please.</a>
				</p>
				<input type="submit" class="btn btn-primary btn-block" value="Submit">
				
			</div>

		</form>
		</div>
		
</div>

</body>
</html>