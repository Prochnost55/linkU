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
    <meta name="author" content="prochnost">
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
  <style type="text/css">
    .left-sidebar{
      float: left;
      border-right: 1px solid lightgrey;
      margin-right:5px;
      width: 20%;
      height:400px;
    }
    #friend{
      border-bottom:1px solid grey;
      padding-left: 10px;
    
    }
    #friend:hover {
     background-color: #f8f8f8;
     border:1px solid #f8f8f8;
      cursor: pointer;
    }
    #friend-active{
      background-color: #f8f8f8;
      border:1px solid #f8f8f8;
      border-bottom: 1px solid grey;
      padding-left: 10px;
    }
    .msg-box{
        width:78%;
        height:350px;
        float: left;
        font-size: 16px;
        border-bottom: 1px solid lightgrey;
        margin-bottom: 5px;       
    }
    #sent{
      border:1px solid grey;
      height:48px;
      padding: 4px; 
      margin-top: 10px;
      width:66%;
      border-radius: 8px;
      margin-left: 280px;
      
    }
    #received{
      border:1px solid lightgrey;
      background-color: #f8f8f8;
      height:48px;
      width:66%;
      padding: 4px;
      margin-top: 10px;
      margin-left: 10px;
      border-radius: 8px;
      
    }
    
    .usermessage {
        position: relative;
        height: auto;
        -webkit-box-sizing: border-box;
           -moz-box-sizing: border-box;
                box-sizing: border-box;
        padding: 10px;
        font-size: 16px;
        width:67%;
        border:1px solid grey;

      }
     .usermessage:focus {
        z-index: 2;
      } 
      .theme-showcase > p > .btn {
  margin: 5px 0;
}
  </style>
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
            <li ><a href="userpage.php">Home</a></li>
            <li class="active"><a href="chatpage.php">Messages</a></li>
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
          <div class="col-lg-12 col-md-12 col-sm-12"><span style="font-size: 30px;">Hey, <?php echo($_SESSION["username"])?></span></div>
      </div><hr>     
      <div class="row">
        <div class="col-lg-4">
        dafdsfadsfa dsfsadgsfa dsagsa dfsag asdgasd dafdsfadsfa dsfsadgsfa dsagsa dfsag asdgasd dafdsfadsfa dsfsadgsfa dsagsa dfsag asdgasd dafdsfadsfa dsfsadgsfa dsagsa dfsag asdgasd dafdsfadsfa dsfsadgsfa dsagsa dfsag asdgasd dafdsfadsfa dsfsadgsfa dsagsa dfsag asdgasd dafdsfadsfa dsfsadgsfa dsagsa dfsag asdgasd dafdsfadsfa dsfsadgsfa dsagsa dfsag asdgasd dafdsfadsfa dsfsadgsfa dsagsa dfsag asdgasd dafdsfadsfa dsfsadgsfa dsagsa dfsag asdgasd dafdsfadsfa dsfsadgsfa dsagsa dfsag asdgasd dafdsfadsfa dsfsadgsfa dsagsa dfsag asdgasd
        </div>
        <div class="col-lg-8">
        asdfasdsa adfsaddsa
        </div>
  
     </div>
</div>
    <footer class="footer">
      <div class="container">
        <p class="text-muted">Developed by Abhishek Singh.</p>
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
