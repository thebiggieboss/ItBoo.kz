<?php
	$data = file_get_contents('php://input');
	$data = json_decode($data, true);

	$fname = $data['fname'];
	$lname = $data['lname'];
	$email = $data['email'];
	$password2 = $data['password'];
	$confirm_password = $data['confirm_password'];

	$servername = "localhost";
	$username = "p-332754_p-332754";
	$password = "Kozhbanbet1!";
	$dbname = "p-332754_itbookz";

	// Check if password and confirm_password match
	if ($password2 !== $confirm_password) {
		$response = array(
			"status" => false,
			"message" => "Пароли не совпадают"
		);
		header('Content-Type: application/json');
		echo json_encode($response);
		exit;
	}

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	// Check if email already exists
	$sql = "SELECT * FROM user WHERE email = '$email'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$response = array(
			"status" => false,
			"message" => "Email уже зарегистрирован"
		);
		header('Content-Type: application/json');
		echo json_encode($response);
		exit;
	}

	// Insert user data into the database
	$sql = "INSERT INTO user (fname, lname, email, password, registered_date)
	VALUES ('$fname', '$lname', '$email', '$password', '" . date("Y.m.d") . "')";

	if ($conn->query($sql) === TRUE) {
		// Fetch the newly registered user's data
		$sql = "SELECT * FROM user WHERE email = '$email'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			session_start();
			$row = $result->fetch_assoc();
			$_SESSION['id'] = $row['id'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['fname'] = $row['fname'];
			$_SESSION['lname'] = $row['lname'];
			$_SESSION['registered_date'] = $row['registered_date'];

			$userData = array(
				"id" => $row['id'],
				"email" => $row['email'],
				"fname" => $row['fname'],
				"lname" => $row['lname'],
				"registered_date" => $row['registered_date']
			);

			$response = array(
				"status" => true,
				"message" => "Регистрация прошла успешно",
				"user" => $userData
			);
			header('Content-Type: application/json');
			echo json_encode($response);
			exit;
		}
	} else {
		$response = array(
			"status" => false,
			"message" => "Ошибка при регистрации"
		);
		header('Content-Type: application/json');
		echo json_encode($response);
		exit;
		}
?>
