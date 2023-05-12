<?php
var_dump($_POST);
$fname = $_POST['fname'] ?? '';
$lname = $_POST['lname'] ?? '';
$phone = $_POST['phone'] ?? '';
$email = $_POST['email'] ?? '';
$password_entered = $_POST['password'] ?? '';
$promo = $_POST['promo'] ?? '';
$book = $_POST['book'] ?? '';

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

// Проверка наличия обязательных полей
if ($fname === '' || $lname === '' || $email === '' || $password_entered === '') {
    $response = array(
        "message" => "Не заполнены обязательные поля",
        "success" => false
    );
    echo json_encode($response);
    exit;
}

// Валидация полей, например, проверка правильности email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $response = array(
        "message" => "Некорректный email",
        "success" => false
    );
    echo json_encode($response);
    exit;
}

$order_no = generateRandomString(5);

$sql = "INSERT INTO ml (order_no, fname, lname, email, phone, password, promo, book, status)
VALUES ('" . $order_no . "', '" . $fname . "', '" . $lname . "', '" . $email . "', '" . $phone . "', '" . $password_entered . "', '" . $promo . "', '" . $book . "', 0)";

if ($conn->query($sql) === TRUE) {
    $response = array(
        "message" => "",
        "success" => true,
        "email" => $email,
        "order_no" => $order_no,
        "book" => $book
    );
    echo json_encode($response);
    exit;
} else {
    $response = array(
        "message" => "Ошибка при обработке запроса: " . $conn->error,
        "success" => false
    );
    echo json_encode($response);
    exit;
}

$conn->close();

// Функция для генерации случайной строки указанной длины
function generateRandomString($length) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>
