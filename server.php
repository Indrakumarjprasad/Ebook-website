<?php  
	session_start();

	$username = "";
	$email = "";
	$errors = array();

	// Connect to the database
	$db = mysqli_connect('localhost','root','','registration');

	// if the register button is clicked
	if (isset($_POST['register'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// ensure that form fields are filled properly

		if (empty($username)) {
			array_push($errors, "Uername is Required");
		}
		if (empty($email)) {
			array_push($errors, "Email is Required");
		}
		if (empty($password_1)) {
			array_push($errors, "Password is Required");
		}
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// if there are no errors save user to database

		if (count($errors) == 0) {
			$password = md5($password_1); // encrypt password before storing in database 
			$sql = "INSERT INTO users (username, email, password, user_group) 
					VALUES ('$username','$email','$password','customer')";
			mysqli_query($db, $sql);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: Home.php'); // redirect to home page
		}
	}


	// log user in form login page
	if (isset($_POST['login'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		$userType = mysqli_real_escape_string($db, $_POST['usertype']);

		// ensure that form fields are filled properly

		if (empty($username)) {
			array_push($errors, "Uername is Required");
		}
		if (empty($password)) {
			array_push($errors, "Password is Required");
		}
		if (count($errors) == 0) {
			$password = md5($password); // encrypt password before comparing with that from database
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password' AND user_group='$userType'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1) {
				// log user in
				$_SESSION['username'] = $username;
				
				if($userType == "admin"){
					$_SESSION['userType'] = "admin";
					header('location: adminHome.php'); // redirect to home page
				}
				else{
					$_SESSION['userType'] = "customer";
					header('location: Home.php'); // redirect to home page
				}

				$_SESSION['success'] = "You are now logged in";
				
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

	//logout
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: Home1.php');
	}

	if (count($errors) > 0){
		foreach ($errors as $error){
			echo $error;
		}
	}

?>