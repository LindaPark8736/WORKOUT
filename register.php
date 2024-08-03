<?php 
include('server.php'); 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" href="RegisterLogin2.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>

<div class="form-container">
	<form method="post" action="register.php">
  		<?php 
		if(isset($error)) {
			foreach($error as $error) {
				echo '<span class="error-msg">'.$error.'</span>';
			};
		};
		?>
	  	<div class="input-group">
  	  		<label>First Name</label>
			<svg class="icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  				<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5"/>
			</svg>
  	  		<input type="text" name="FName" value="<?php echo $FName; ?>">
  		</div>
	  	<div class="input-group">
  	  		<label>Last Name</label>
			<svg class="icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  				<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5"/>
			</svg>
  	  		<input type="text" name="LName" value="<?php echo $LName; ?>">
  		</div>
  		<div class="input-group">
  	  		<label>Username (required)</label>
			<svg class="icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  				<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 13 16h-2a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 12 21Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
			</svg>

  	  		<input type="text" name="username" value="<?php echo $username; ?>">
  		</div>
  		<div class="input-group">
			<label>Email (required)</label>
			<svg class="icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  				<path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z"/>
			</svg>

  	  		<input type="email" name="email" value="<?php echo $email; ?>">
  		</div>
  		<div class="input-group">
  	  		<label>Password (required)</label>
			<svg class="icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  				<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
			</svg>
  	  		<input type="password" name="password" value="<?php echo $password; ?>">
  		</div>
  		<div class="input-group">
  	  		<label>Confirm password (required)</label>
			<svg class="icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  				<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
			</svg>
  	 		<input type="password" name="password_2">
  		</div>
  		<div class="input-group">
			<button type="submit" class="btn" name="reg_user"> Sign up <div class="arrow-wrapper"> <div class="arrow"></div> </div> </button>
  		</div>
  		<p>
  			Already a member? <a href="login.php">Sign in</a>
  		</p>
  	</form>
</div>
</body>
</html>