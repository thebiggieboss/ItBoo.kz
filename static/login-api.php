<?php
	$data = file_get_contents('php://input');
	$data = json_decode($data, true);
	$email = $data['email'];
	$password_entered = $data['password'];

	if ($email == "" || $password_entered == "") {
		$response = array(
			"status" => false,
			"message" => "Email и пароль должны быть заполнены"
		);
		header('Content-Type: application/json');
		echo json_encode($response);
		exit;
	}

	$servername = "localhost";
	$username = "p-332754_p-332754";
	$password = "Kozhbanbet1!";
	$dbname = "p-332754_itbookz";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM user WHERE email = '" . $email . "' AND password = '" . $password_entered . "'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		session_start();
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	$_SESSION['id'] = $row['id'];
	    	$_SESSION['email'] = $row['email'];
	    	$_SESSION['fname'] = $row['fname'];
	    	$_SESSION['lname'] = $row['lname'];
			$_SESSION['registered_date'] = $row['registered_date'];

			$response = array(
				"status" => true,
				"message" => "Регистрация успешно",
				"user" => array(
            "id" => $_SESSION['id'],
            "email" => $_SESSION['email'],
            "fname" => $_SESSION['fname'],
            "lname" => $_SESSION['lname'],
            "registered_date" => $_SESSION['registered_date']
        )
			);
			header('Content-Type: application/json');
			echo json_encode($response);
			exit;
	    }
	}
	$response = array(
		"status" => false,
		"message" => "Email или пароль не правильно"
	);
	header('Content-Type: application/json');
	echo json_encode($response);

	$conn->close();
	exit;
?>
