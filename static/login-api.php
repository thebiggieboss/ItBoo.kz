<?php
	$email = $_POST['email'];
	$password_entered = $_POST['password'];

	if ($email == "" || $password_entered == "") {
		$response = array(
			"status" => "false",
			"message" => "Email и пароль должны быть заполнены"
		);
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

	// Проверка данных пользователя
	// ...

	// Если данные правильные
	$response = array(
		"status" => "true",
		"message" => ""
	);
	echo json_encode($response);

	$conn->close();
	exit;
?>
