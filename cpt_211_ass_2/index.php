<?php
	session_start();	
?>


<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>LOGIN PAGE</title>
		<link href="assets/style.css" rel="stylesheet" type="text/css">   <!-- CSS LINK !-->
		<script type="text/javascript" src="assets/jquery-3.4.1.js" ></script>  <!-- JQUERY LINK !-->
		<script src="assets/js.js"></script>   <!-- JAVA SCRIPT LINK !-->
</head>

<body>
	
	<!-- Login Class !-->
	<div class="login">
		<div class="loginText">
			<h1>System Analysis and Design</h1>
		</div>
		
		<!-- Login Button Class !-->
		<div class="loginBtn">
			<table>
				<tr>
					<td>	<!-- Sign in Button To Display Modal !-->
						<button class="logButton" onclick="document.getElementById('loginModal').style.display='block'" style="width:auto;">Login</button>
						
					</td>
					
					<td>&nbsp;
						
					</td>
					
					<td>	<!-- Sign Up Button To Display Modal !-->
						<button class="logButton" onclick="document.getElementById('signUpForm').style.display='block'" style="width:auto;">Sign up</button>
					</td>
				</tr>
			</table>
		</div>
	</div>
	
	<!-- LOGIN MODAL !-->
	
	<div id="loginModal" class="modal">
		
		<!-- Sign In Form !-->
		<form class="modal-content animate" method="post" action="loginSubmit.php">  
		  <div class="container">
			  
			  <label class="modal-label"><b> User Login</b></label>
			  
			  <br><br>
			  
			<label><b>Username</b></label>
			<input type="text" placeholder="Enter Username" name="user" autofocus required>
			
			<label><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="pass" required>
			  
			  <table>
				  <tr>
					  <td>	<!-- Sign In Button submit to login submit page !-->
						  <button class="logButton2" type="submit" name="submit">Login</button>
					  </td>
					  
					  <td>&nbsp;
						  
					  </td>
					  
					  <td>	<!-- Cancel Button To retun to index page !-->
						  <button type="button" onclick="document.getElementById('loginModal').style.display='none'" class="cancelButton">Cancel</button>
					  </td>
				  </tr>
			  </table>
		  </div>
		</form>
	</div>
	
	
	<!-- SIGN UP MODAL !-->
	
	<div id="signUpForm" class="modal">	
		
		<!-- Sign Up Form !-->
	  <form class="modal-content animate" method="post" action="regSubmit.php">
		  <div class="container">
			  
		  	<label class="modal-label"><b>&nbsp;&nbsp;Sign Up</b></label>
			  
		 	<br><br>
			  
		  <label><b>Username</b></label>
		  <input type="text" placeholder="Enter Username" name="user" autofocus >

		  <label><b>Password</b></label>
		  <input type="password" placeholder="Enter Password" name="pass" >

		  <label><b>Repeat Password</b></label>
		  <input type="password" placeholder="Repeat Password" name="repPass" >
			
			<table>
				  <tr>
					  <td>	<!-- Sign Up Button submit to reg submit page !-->
						  <button class="logButton2" type="submit" name="reg_user">Sign Up</button>
					  </td>
					  
					  <td>&nbsp;
						  
					  </td>
					  
					  <td>	<!-- Cancel Button To retun to index page !-->
						  <button type="button" onclick="document.getElementById('signUpForm').style.display='none'" class="cancelButton">Cancel</button>
					  </td>
				  </tr>
			  </table>
		</div>
	  </form>
	</div>
	
	
	<!-- MODAL EXIT SCRIPT !-->
	
	<script>
		
		// Get the sign up modal
		var modal = document.getElementById('signUpForm');
		var modal2 = document.getElementById('loginModal');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
			else if (event.target == modal2){
				modal2.style.display = "none";
			}
		}	
	</script>
	
</body>
</html>
