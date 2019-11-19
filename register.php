<?php 

	include("includes/config.php");
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");

	$account = new Account($con);

	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");

	function getInputValue($name){
		if (isset($_POST[$name])){
			echo($_POST[$name]);
		}

	}

 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
	<title>OMSP || Registration</title>
	<link rel="stylesheet" type="text/css" href="assets/css/register.css">
</head>

<body>
	<div id="background">
		<div id="inputContainer">
			<form id="loginForm" action="register.php" method="POST">
				<h2>Login to your Account</h2>
				<p>
					<?php echo $account -> getError(Constants::$loginFailed) ?>
					<label for="loginUserName">User Name: </label>
					<input id="loginUserName" type="text" name="loginUserName" placeholder="Your User Name" required>
				</p>
				<p>
					<label for="loginPassword">Password: </label>
					<input id="loginPassword" type="password" name="loginPassword" placeholder="Your password" required>
				</p>
				<button type="submit" name="loginButton">Log In</button>		
			</form>

			<form id="registerForm" action="register.php" method="POST">
				<h2>Create Your Free Account</h2>
				<p>
					<?php echo $account -> getError(Constants::$userNameCharacters) ?>
					<?php echo $account -> getError(Constants::$userNameTaken) ?>
					<label for="userName">User Name: </label>
					<input id="userName" type="text" name="userName" placeholder="User Name" value="<?php getInputValue('userName') ?>" required>
				</p>
				<p>
					<?php echo $account -> getError(Constants::$firstNameCharacters) ?>
					<label for="firstName">First Name: </label>
					<input id="firstName" type="text" name="firstName" placeholder="First Name" value="<?php getInputValue('firstName') ?>" required>
				</p>
				<p>
					<?php echo $account -> getError(Constants::$lastNameCharacters) ?>
					<label for="lastName">Last Name: </label>
					<input id="lastName" type="text" name="lastName" placeholder="Last Name" value="<?php getInputValue('lastName') ?>" required>
				</p>
				<p>
					<?php echo $account -> getError(Constants::$emailsDoNotMatch) ?>
					<?php echo $account -> getError(Constants::$emailInvalid) ?>
					<?php echo $account -> getError(Constants::$emailTaken) ?>
					<label for="email">Email: </label>
					<input id="email" type="email" name="email" placeholder="Email Address" value="<?php getInputValue('email') ?>" required>
				</p>
				<p>
					<label for="email2">Confirm Email: </label>
					<input id="email2" type="email" name="email2" placeholder="Confirm Email" value="<?php getInputValue('email2') ?>" required>
				</p>
				<p>
					<?php echo $account -> getError(Constants::$passwordDoNotMatch) ?>
					<?php echo $account -> getError(Constants::$passwordNotAlphaNumeric) ?>
					<?php echo $account -> getError(Constants::$passwordCharacters) ?>
					<label for="password">Password: </label>
					<input id="password" type="password" name="password" placeholder="Password" required>
				</p>
				<p>
					<label for="password2">Confirm Password: </label>
					<input id="password2" type="password" name="password2" placeholder="Confirm Password" required>
				</p>
				<button type="submit" name="registerButton">Sign Up</button>			
			</form>
		</div>
	</div>	
</body>
</html>
