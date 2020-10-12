<?php
session_start();
  
  if (isset($_SESSION["useremail"])){$useremail = $_SESSION["useremail"];}
  else{header("location:index.php?message=0050");}

?>
<?php
  $propicpath = ("users/".$_SESSION["useremail"]."/profilepicture.jpg");
  if(file_exists($propicpath)){
    unlink($propicpath);
  }
  
?>

<?php
if (isset($_FILES["photo"]) and $_FILES["photo"]["error"] ==UPLOAD_ERR_OK ) {
 		if ( $_FILES["photo"]["type"] != "image/jpeg" ) {
 				header("location:changeProPic.php?e=1");
 			} 
 			elseif (!move_uploaded_file( $_FILES["photo"]["tmp_name"],"users/".$useremail."/profilepicture.jpg"  ) ) {
 				header("location:changeProPic.php?e=2");
 			} else {
				header("location:changeProPic.php?e=3");
 					}
 } else {
 
 		switch( $_FILES["photo"]["error"] ) {
 			case UPLOAD_ERR_INI_SIZE:
 				header("location:changeProPic.php?e=4");
 				break;
 			case UPLOAD_ERR_FORM_SIZE:
 				header("location:changeProPic.php?e=4");
 				break;
 			case UPLOAD_ERR_NO_FILE:
 				header("location:changeProPic.php?e=5");
 				break;
 			default:
				 header("location:changeProPic.php?e=2");
 }
 			header("location:changeProPic.php?e=2");
 }

?>