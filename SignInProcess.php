<?php
		

			$dsn = "mysql:dbname=users";
			$db_username = "root";
			
			try {
			 $conn = new PDO( $dsn, $db_username);
			 $conn-> setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			} catch ( PDOException $e ) {
			 echo "Connection failed: " . $e-> getMessage();
			}
			
			
  			$inputEmail = $_POST["email"];
  			$inputPassword = $_POST["password"];
  
			$sql = "SELECT * FROM users";

			try {
			 $rows = $conn->query( $sql );
				 foreach ( $rows as $row ) {
				 	if ($row["useremail"] == $inputEmail ){
				 		if ($row["password"] == $inputPassword ){
				 		$username = $row["name"];
				 		$usergender = $row["gender"];
				 		$useremail = $row["useremail"];
				 		$userprivileges = $row["privileges"];
				 		
				 		$flag = 1;
				 	}
	
				 	} 

			 	}
			 }



			  catch ( PDOException $e ) {
			 echo "Query failed: " . $e->getMessage();
			}

			echo "</ul>";
			$conn = null;

			if($flag != 1){
				header("location:index.php?message=6789");
			}
			elseif($flag==1){
				session_start();
				$_SESSION["username"] = $username;
				$_SESSION["usergender"] = $usergender;
				$_SESSION["useremail"] = $useremail;
				$_SESSION["userprivileges"] = $userprivileges;
	
				header("location:userpage.php");
			}
			

?>