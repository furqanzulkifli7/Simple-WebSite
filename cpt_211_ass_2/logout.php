<?php  
	session_start();
	unset($_SESSION['sess_user']);
	session_destroy();
//	header("Location: index.php")
echo "<script type='text/javascript'>alert('SUCCESSFULL SIGN OUT !!!');window.location.href='index.php';</script>";
	
?>