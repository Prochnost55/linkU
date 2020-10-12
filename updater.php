<?php
session_start();
  
  if (isset($_SESSION["useremail"])){$useremail = $_SESSION["useremail"];}
  else{header("location:index.php?message=0050");}

?>

<?php
	$dsn = "mysql:dbname=users";
	$db_username = "root";


try {
 		$conn = new PDO($dsn, $db_username);
 		$conn-> setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	} catch ( PDOException $e ) {
 		echo "Connection failed: " . $e-> getMessage();
	}

$userrollno = $_POST["userrollno"];
$userbday = $_POST["userbday"];
$usercontnum = $_POST["usercontnum"];
$useraddclg = $_POST["useraddclg"];
$useraddhome = $_POST["useraddhome"];


$sql = "UPDATE profile SET rollno = :rollno, bday = :Bday, contnum = :ContNum, addclg = :AddClg, addhome= :AddHome WHERE useremail = :useremail";

try {
 $st = $conn-> prepare( $sql );
 $st-> bindValue( ":useremail", $useremail, PDO::PARAM_INT );
 $st-> bindValue( ":rollno", $userrollno, PDO::PARAM_STR );
 $st-> bindValue( ":Bday", $userbday, PDO::PARAM_STR );
 $st-> bindValue( ":ContNum", $usercontnum, PDO::PARAM_STR );
 $st-> bindValue( ":AddClg", $useraddclg, PDO::PARAM_STR );
 $st-> bindValue( ":AddHome", $useraddhome, PDO::PARAM_STR );
 $st-> execute();
} catch ( PDOException $e ) {
 echo "Query failed: " . $e-> getMessage();
 $error = 1;
}



$connc = null;
if ($error == 1){
		header("location:profile.php?msg=3214");
	}else{
		header("location:profile.php?msg=1456");
	}
?> 