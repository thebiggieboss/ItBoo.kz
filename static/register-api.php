<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password_entered = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

$servername = "localhost";
$username = "p-332754_p-332754";
$password = "Kozhbanbet1!";
$dbname = "p-332754_itbookz";

$response = array();

if ($password_entered !== $confirm_password) {
    $response["status"] = "false";
    $response["message"] = "Енгізілген құпия сөздер бірдей болу керек";
    echo json_encode($response);
    exit;
}

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM user WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $response["status"] = "false";
        $response["message"] = "Бұл email арқылы басқа біреу тіркелген. Басқа email қолданып көріңіз.";
        echo json_encode($response);
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO user (fname, lname, email, password, registered_date) VALUES (:fname, :lname, :email, :password, :registered_date)");
    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password_entered);
    $stmt->bindParam(':registered_date', date("Y.m.d"));
    $stmt->execute();

    $response["status"] = "true";
    $response["message"] = "";

    echo json_encode($response);
    exit;
} catch (PDOException $e) {
    $response["status"] = "false";
    $response["message"] = "Error: " . $e->getMessage();
    echo json_encode($response);
    exit;
}
?>
