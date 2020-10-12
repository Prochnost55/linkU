<?php
	session_start();
  if ($_SESSION["userprevilages"] != "admin"){
          header("location:userpage.php");
    }
  
	if(isset($_POST["info-text"])){	
		$info =	$_POST["info-text"];
		$for = $_GET["for"];
		$by = "<!--upadated by".$_SESSION["username"]."-->";								
							$handle = fopen("noti-data/".$for."-noti.txt", "w"); 
                            fwrite($handle, $info);
                            
							fclose($handle);
		header("location:userpage.php");
	}
	else{
		echo"crashed";
	}
?>