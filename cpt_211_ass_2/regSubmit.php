<?php

	if (isset($_POST['reg_user'])){		// Check if user click sign up button
	
	require 'dbConnect.php';
		
		$username = $_POST['user'];
		$password = $_POST['pass'];
		$passwordRepeat = $_POST['repPass'];
		
		
		// Check if Validation Username
		if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
			echo "<script type='text/javascript'>alert('INVALID USERNAME !!!');window.location.href='index.php';</script>";
			exit();
		}
		
		// Check if both password is match
		else if($password !== $passwordRepeat){
			echo "<script type='text/javascript'>alert('PASSWORD DID NOT MATCH !!!');window.location.href='index.php';</script>";
			exit();
		}
		
		// Check If username Already Exist In Databse
		else {
			
			$sql = "SELECT user FROM admin WHERE user =?";
			$stmt = mysqli_stmt_init($conn);
			
			// Check if Connection is Correct
			if(!mysqli_stmt_prepare($stmt, $sql)){
				echo "<script type='text/javascript'>alert('SQL ERROR !!!');window.location.href='index.php';</script>";
				exit();		
			}
			// Search Username in Database
			else { 
				mysqli_stmt_bind_param($stmt, "s", $username);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$resultCheck = mysqli_stmt_num_rows($stmt);
				
				if ($resultCheck > 0){
					echo "<script type='text/javascript'>alert('USERNAME HAVE BEEN TAKEN !!!');window.location.href='index.php';</script>";
					exit();	
				}
				
				else {
					// Inset Value Into Database
					$sql = "INSERT INTO admin (user,pass) VALUE (?,?)";
					$stmt = mysqli_stmt_init($conn);
					
					if(!mysqli_stmt_prepare($stmt, $sql)){
						echo "<script type='text/javascript'>alert('SQL ERROR !!!');window.location.href='index.php';</script>";
						exit();		
					}
					
					else {
//						$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
						
						mysqli_stmt_bind_param($stmt, "ss", $username,$password);
						mysqli_stmt_execute($stmt);
						echo "<script type='text/javascript'>alert('SIGN UP COMPLETE !!!');window.location.href='index.php';</script>";
						exit();
					}
				}
			}
			
		}
		// Close Connection
		mysqli_stmt_close($stmt);
		mysqli_close($conn);
	}

?>