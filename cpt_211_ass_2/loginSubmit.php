<?php

//	session_start();
		require('dbConnect.php'); // Connection To Database


		if (isset($_POST['user']) and isset($_POST['pass'])){  // get username & password from input
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			
			// Compare Username & Password from user with in database
			$query = mysqli_query($conn, "SELECT * FROM admin WHERE user='".$user."' AND pass='".$pass."'");
			$numrows = mysqli_num_rows($query);
			 
			 	if($numrows !=0){  // Search Username & Password
		 			while($row = mysqli_fetch_assoc($query))
		 				{
		 					$dbusername=$row['user'];
		 					$dbpassword=$row['pass'];
		 				}
			 				// Username & Password is Match Session will start
			 			if($user == $dbusername && $pass == $dbpassword){
							 	session_start();
							 	$_SESSION['sess_user']=$user;
							 	// Redirect Browser
								header("Location:/cpt_211_ass_2/home.php");
							 }
			 		}
						
						// error message if username & password not match
			 		else
		 				{
		 					echo "<script type='text/javascript'>alert('INVALID USERNAME OR PASSWORD !!!');window.location.href='index.php';</script>";
		 				}

		}

?>