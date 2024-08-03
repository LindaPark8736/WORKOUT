<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="RegisterLogin2.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>

<div class="form-container">  
  <form method="post" action="login.php">
  	<?php 
		if(isset($error)) {
			foreach($error as $error) {
				echo '<span class="error-msg">'.$error.'</span>';
			};
		};
	?>
  	<div class="input-group">
  		<label>Username (Required)</label>
		<svg class="icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  			<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 13 16h-2a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 12 21Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
		</svg>
  		<input type="text" name="username" value="<?php echo $username; ?>" >
  	</div>
  	<div class="input-group">
  		<label>Password (Required)</label>
		<svg class="icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  			<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
		</svg>
  		<input type="password" name="password" value="<?php echo $password; ?>">
  	</div>
  	<div class="input-group">
	  <button type="submit" class="btn" name="login_user"> Login <div class="arrow-wrapper"> <div class="arrow"></div> </div> </button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</div>
</body>
</html>