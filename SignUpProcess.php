<?php
		

			$dsn = "mysql:dbname=users";
			$db_username = "root";
			
			try {
			 $conn = new PDO( $dsn, $db_username);
			 $conn-> setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			} catch ( PDOException $e ) {
			 echo "Connection failed: " . $e-> getMessage();
			}
			
			$name = $_POST["Name"];
			$password = $_POST["password"];
			$useremail = $_POST["Email"];
			$gender = $_POST["gender"];
  			$privileges = "local";

  			$userBday = "blank";
  			$usercontnum = "0000000000";
  			$userrollno = "0";

  			$useraddclg ="blank";
  			$useraddhome = "blank";
  			
  			$error = "0";	
  	

			  	$sqlforprofile = "INSERT INTO profile VALUES ( :useremail, :Bday, :RollNo, :ContNum, :AddClg, :AddHome )";
							 	try {
									 $st = $conn-> prepare( $sqlforprofile );
									 $st-> bindValue( ":useremail", $useremail, PDO::PARAM_STR );
									 $st-> bindValue( ":Bday", $userBday, PDO::PARAM_STR );
									 $st-> bindValue( ":RollNo", $userrollno, PDO::PARAM_STR );
									 $st-> bindValue( ":ContNum", $usercontnum, PDO::PARAM_STR );
									 $st-> bindValue( ":AddClg", $useraddclg, PDO::PARAM_STR );
									 $st-> bindValue( ":AddHome", $useraddhome, PDO::PARAM_STR );
									 $st-> execute();
									} 
						
								catch ( PDOException $e ) {
									 echo "Query failed: " . $e-> getMessage();
									 $error = 1;
									 } 

 

		 if ($error == 1){
				 	header("location:signup.php?message=1472");
				 }
				 else{

					$sql = "INSERT INTO users VALUES ( :name, :password, :useremail,:gender, :privileges )";



		//			$sql = "INSERT INTO users VALUES ( :name, password(:password), :useremail,:gender )";

					try {
					 $st = $conn-> prepare( $sql );
					 $st-> bindValue( ":name", $name, PDO::PARAM_STR );
					 $st-> bindValue( ":password", $password, PDO::PARAM_STR );
					 $st-> bindValue( ":useremail", $useremail, PDO::PARAM_STR );
					 $st-> bindValue( ":gender", $gender, PDO::PARAM_STR );
					 $st-> bindValue( ":privileges", $privileges, PDO::PARAM_STR );
					 $st-> execute();
					}

					catch ( PDOException $e ) {
						 echo "Query failed: " . $e-> getMessage();
						 $error = 1;
						 } 
									 	

					$handle = opendir("users");
					mkdir("users/".$useremail);
					closedir($handle);


				 	header("location:index.php?message=1234");
				 }
			
				 ?>