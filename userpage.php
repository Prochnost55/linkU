<?php
session_start();
  
  if (isset($_SESSION["username"])){$username = $_SESSION["username"];}
  if (isset($_SESSION["usergender"])){$usergender = $_SESSION["usergender"];}
  else{header("location:index.php?message=0050");}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Welcome, <?php echo($_SESSION["username"]);?></title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="css/sticky-footer-navbar.css" rel="stylesheet">

    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="userpage.php">LinkU</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="userpage.php">Home</a></li>
            <li><a href="chatpage.php">Messages</a></li>
            <li><a href="Profile.php">Profile</a></li>
            <li><a href="settings.php">Settings</a></li>
            <!--li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li-->
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php">Logout</a></li>
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- Begin page content -->
    <div class="container">
        <div class="row">
          <div class="col-lg-10 col-md-10 col-sm-9" ><span style="font-size: 30px;">Hey, <?php echo($_SESSION["username"])?></span></div>
          <div class="col-lg-2 col-md-2 col-sm-2">
        <?php
            if($_SESSION["userprivileges"]=="admin"){
        ?>
        <form action="new-info.php" method="post" class="form">
            <input type="submit" name="noti" value="Post New Info" class="btn btn-success">
        </form>
        <?php
      }
        ?>      
        </div>
      </div>
      <hr>
      <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">

            <table class="table table-bordered table-striped table-hover">
              <thead><h3>College Notifications</h3></thead>

            <?php
            $handle = fopen("noti-data/clg-noti.txt", "r"); 
            $lineNumber = 1;     
                    while ( $line = fgets( $handle ) ) { 

                     echo ("<tr style='word-warp:break-word;'><td>".$line."</tr></td>"); 
                   }             
            fclose($handle);
            ?>
            </table>

        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
           <table class="table table-bordered table-striped table-hover">
              <thead><h3>Class Notifications</h3></thead>

            <?php
            $handle = fopen("noti-data/cls-noti.txt", "r"); 
            $lineNumber = 1;     
                    while ( $line = fgets( $handle ) ) { 
                     echo ("<tr style='word-warp:break-word;'><td>".$line."</tr></td>"); 
                   }             
            fclose($handle);
            ?>
            </table>
        </div>
     </div>
</div>
    <footer class="footer">
      <div class="container">
        <p class="text-muted">Developed by <a href="Abhishek.php">Abhishek Singh.</a></p>
      </div>

    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
