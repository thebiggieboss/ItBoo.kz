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

$id = $_GET['id'];

// Fetch data from problem table
$sql = "SELECT input, output FROM problem WHERE id = " . $id;
$result = $conn->query($sql);

$problemData = [];

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $problemData['input'] = $row['input'];
    $problemData['output'] = $row['output'];
}

// Fetch data from CSV file
$csvFileName = "input-problems/in_" . $id . ".csv";
$csvData = [];

if (file_exists($csvFileName)) {
    if (($handle = fopen($csvFileName, "r")) !== false) {
        while (($data = fgetcsv($handle, 1000, ",")) !== false) {
            $csvData[] = $data;
        }
        fclose($handle);
    }
}

// Prepare the response
$response = [
    'input' => $problemData['input'],
    'output' => $problemData['output'],
    'csvData' => $csvData
];

// Send the response as JSON
header('Content-Type: application/json');
echo json_encode($response);

$conn->close();
?>
