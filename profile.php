<?php
session_start();
  
  if (isset($_SESSION["username"])){$username = $_SESSION["username"];}
  if (isset($_SESSION["usergender"])){$usergender = $_SESSION["usergender"];}
  else{header("location:index.php?message=0050");}

?>
<?php
  $propicpath = ("users/".$_SESSION["useremail"]."/profilepicture.jpg");
  $altpropic = ("data/".$usergender.".jpg");
  if(file_exists($propicpath)){
    $path = $propicpath;
  }
  else{
    $path = $altpropic;
  }
?>
<?php


      $dsn = "mysql:dbname=users";
      $db_username = "root";
      
      try {
            $connc = new PDO( $dsn, $db_username);
            $connc-> setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
      } catch ( PDOException $er ) {
       echo "Connection failed: " . $er-> getMessage();
      }
      
      
        $email = $_SESSION["useremail"];
        
      $sql = "SELECT * FROM profile";

      try {
       $rows = $connc->query( $sql );
         foreach ( $rows as $row ) {
          if ($row["useremail"] == $email ){
            $_SESSION["userbday"] = $row["Bday"];
            $_SESSION["userrollno"] = $row["RollNo"];
            $_SESSION["usercontnum"] = $row["ContNum"];
            $_SESSION["useraddclg"] = $row["AddClg"];
            $_SESSION["useraddhome"] = $row["AddHome"];
          } 

        }
       }

      
        catch ( PDOException $er ) {
       echo "Query failed: " . $er->getMessage();
      }

      if ($_SESSION["useraddhome"]=="blank"){
          $useraddhome = "<a href='updateprofile.php'>Click here to add</a>";
          $useraddclg = "<a href='updateprofile.php'>Click here to add</a>";
          $usercontnum = "<a href='updateprofile.php'>Click here to add</a>";
          $userrollno = "<a href='updateprofile.php'>Click here to add</a>";
          $userbday = "<a href='updateprofile.php'>Click here to add</a>";
             
      }else{
        $userbday = $_SESSION["userbday"];
        $useraddhome = $_SESSION["useraddhome"];
        $userrollno = $_SESSION["userrollno"];
        $useraddclg = $_SESSION["useraddclg"];
        $usercontnum = $_SESSION["usercontnum"];
      }




      echo "</ul>";
      $connc = null;

              $rn = $_SESSION["userrollno"];
              $bc = substr($rn,-4,-2);
              $userbranch = $bc;
      
      switch($bc){
        case "01":
          $userbranch = "Electronics Enggineering";
        break;
        case "02":
          $userbranch = "Computer Science Enggineering";
        break;
        case "03":
          $userbranch = "Electrical Enggineering";
        break;
        case "04":
          $userbranch = "Mechanical Enggineering";
        break;
        case "05":
          $userbranch = "Civil Enggineering";
        break;
        case "06":
          $userbranch = "Production Enggineering";
        break;
        case "07":
          $userbranch = "Bio-Technology Enggineering";
        break;
      }      

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Prochnost">
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
     .pro-pic{
        width:100px;
        height:100px;
        border-radius:100%;
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
            <li ><a href="chatpage.php">Messages</a></li>
            <li  class="active"><a href="Profile.php">Profile</a></li>
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

<?php
  if (isset($_GET["msg"])){
      if ($_GET["msg"] == "1456"){
        echo("<div class='alert alert-success' role='alert'>");
        echo("<strong>Profile updated successfully</strong></div>");

      }
      else if ($_GET["msg"] == "3214"){
        echo("<div class='alert alert-danger' role='alert'>");
        echo("<strong>Update Failed. </strong>We are sorry for that.</div>");

      }
  }
?>
         <div class="row">
                <div class="col-lg-12">
                    <img class="img-thumbnail pro-pic" src=<?php echo($path);?>>
                      <span style="font-size:30px;"><?php echo($_SESSION["username"])?></span>
                        <a href="ChangeProPic.php"><input type="button" name="change" value="Change Profile Pic" class="btn btn-xs btn-warning"></a>   
                        
               </div>
        </div>
        <br><br>
        <div class="row">
          <div class="col-lg-6">
              <table class="table table-striped">
                    <caption><h3>Personal Details</h3></caption>
                          <tr><td>Name</td><td><?php echo($_SESSION["username"])?></td></tr>
                          <tr><td>Gender</td><td><?php echo($_SESSION["usergender"])?></td></tr>
                          <tr><td>Birthday</td><td><?php echo($userbday)?></td></tr>
                          <tr><td>Roll No</td><td><?php echo($userrollno)?></td></tr>
                          <tr><td>Branch</td><td><?php echo($userbranch)?></td></tr>
                          

              </table>
             </div>
             <div class="col-lg-6"> 
              <table class="table table-striped">
                    <caption><h3>Contact Details</h3></caption>
                  <tr><td>Email Address</td><td><?php echo($_SESSION["useremail"])?></td></tr>
                  <tr><td>Contact Number</td><td><?php echo($usercontnum)?></td></tr>
                  <tr><td>Address in College</td><td><?php echo($useraddclg)?></td></tr>
                  <tr><td>Home Address<span class="text-muted">(Optional)</span></td><td><address><?php echo($useraddhome)?></address></td></tr>
                  
                   </table> 
                  </div> 
            
        </div>
       <hr>
        <div class="row">
          <div class="col-lg-12">
                 <center> <a href="updateprofile.php"><input type="button" name="change" value="Update Profile" class="btn btn-md btn-success"></a></center>
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
