<?php
$servername = "localhost";
$username = "p-332754_p-332754";
$password = "Kozhbanbet1!";
$dbname = "p-332754_itbookz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}

$sql = "INSERT INTO visits (page_id, date_visited, time_visited, user_level)
        VALUES (1000, '" . date("Y.m.d") . "', '" . date("H:i:s") . "', 0)";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["message" => "Кіру туралы жазба серверге жіберілді"]);
} else {
    echo json_encode(["message" => "Кіру туралы жазба серверге жіберілмеді: " . $conn->error]);
}

$conn->close();
?>
