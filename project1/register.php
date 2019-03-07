<!--?php include_once("register.php") ?-->
<?php include('server.php'); 
if(isset($_POST['register'])){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password1'];
		//Ensure that all fields are filled properly
		if(empty($username)){
			array_push($errors,"Username is required");
		}
		if(empty($email)){
			array_push($errors,"Email is required");
		}
		if(empty($password)){
			array_push($errors,"password is required");
		}
		//if there are no errors , save user data to the database
		if(count($errors) == 0){
			$password = md5($password); // encrypting password before storing it into database (security)
			$sql = "INSERT INTO user_data (username, email, password1) VALUES ('$username','$email','$password')";
			mysqli_query($db, $sql);	
			header('location:login.php'); // redirect to home page
		}
		
	}
?>
<!DOCTYPE>
<html>
<head>
	<title>Registration From</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="">
		<!--Display errors here-->
		<?php include('errors.php'); ?>
		<div class="input_group">
			<label>Username</label>
			<input type="text" name="username" placeholder="Your name" value="username">
		</div>
		<div class="input_group">
			<label>Email</label>
			<input type="text" name="email" placeholder="Your Email" value="example@email.com">
		</div>
		<div class="input_group">
			<label>Password</label>
			<input type="password" name="password1" placeholder="Your password">
		</div>
		<!--div class="input_group">
			<label>Confirm password</label>
			<input type="password" name="password2" placeholder="Confirm password">
		</div-->
		<div class="input_group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p><br>
		<button >
			<a href="home.php" style="color: blue">Home</a>
		</button>
		
	</form>
</body>
</html>
