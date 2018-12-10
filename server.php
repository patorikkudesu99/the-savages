<?php
	session_start();

	$firstname="";
	$middlename="";
	$lastname="";
	$gender="";
	$age="";
	$type="";
	$course="";
	$school="";
	$username="";
	$email="";
	$errors= array();
	
	$db = mysqli_connect ('localhost', 'root', '', 'reviewerforitpassportdb');
	
	
	//for registration
	if (isset($_POST['register'])){
		$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
		$middlename = mysqli_real_escape_string($db, $_POST['middlename']);
		$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
		
		if(isset($_POST['gender'])){
			$gender = mysqli_real_escape_string($db, $_POST['gender']);
		}
		
		$age = mysqli_real_escape_string($db, $_POST['age']);
		
		if(isset($_POST['type'])){
			$type = mysqli_real_escape_string($db, $_POST['type']);
		}
		
		$course = mysqli_real_escape_string($db, $_POST['course']);
		$school = mysqli_real_escape_string($db, $_POST['school']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		if (empty($firstname)){
			array_push($errors, "First Name is required");
		}
		if (empty($lastname)){
			array_push($errors, "Last Name is required");
		}
		if (empty($gender)){
			array_push($errors, "Gender is required");
		}
		if (empty($age)){
			array_push($errors, "Age is required");
		}
		if (empty($type)){
			array_push($errors, "Type is required");
		}
		if (empty($course)){
			array_push($errors, "Course is required");
		}
		if (empty($school)){
			array_push($errors, "School required");
		}
		if (empty($email)){
			array_push($errors, "Email is required");
		}
		if (empty($username)){
			array_push($errors, "Username is required");
		}
		if (empty($password_1)){
			array_push($errors, "Password is required");
		}
		if (empty($password_2)){
			array_push($errors, "Confirm your password");
		}
		if ($password_1 != $password_2){
			array_push($errors, "Passwords do not match");
		}
		
		
		$user_check_query = "SELECT * FROM users WHERE username='$username'  LIMIT 1";
		$result = mysqli_query($db, $user_check_query);
		$user = mysqli_fetch_assoc($result);
  
		if ($user) {
			if ($user['username'] === $username) {
				array_push($errors, "Username already exists");
			}
		}
		
		if (count($errors) == 0){
			$password = md5($password_1);
			$sql = "INSERT INTO users (firstname, middlename, lastname, gender, age, type, course, school, emailadd, username, password)
					VALUES ('$firstname', '$middlename', '$lastname', '$gender', '$age', '$type', '$course', '$school', '$email', '$username', '$password_1')";
			mysqli_query($db, $sql);
			$_SESSION['username'] = $username;
			//$_SESSION['success'] = "You are now registered! Please log in your account.";
			//header('location: login.php');
		}
		
	}
?>