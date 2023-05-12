<?php
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

$sql = "SELECT * FROM problem";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Create an array to store the data
    $data = array();

    // Fetch data and add it to the array
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    // Convert the array to JSON and echo it
    echo json_encode($data);
} else {
    echo "No results found.";
}

// Close the connection
$conn->close();
?>
