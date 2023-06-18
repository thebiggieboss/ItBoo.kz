<?php
$data = file_get_contents('php://input');
$data = json_decode($data, true);
$fname = $data['fname'] ?? '';
$lname = $data['lname'] ?? '';
$phone = $data['phone'] ?? '';
$email = $data['email'] ?? '';
$password_entered = $data['password'] ?? '';
$promo = $data['promo'] ?? '';
$book = $data['book'] ?? '';

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
        "message" => "Міндетті орындар толтырылмады",
        "success" => false
    );
    echo json_encode($response);
    exit;
}

// Валидация полей, например, проверка правильности email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $response = array(
        "message" => "E-mail қате",
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
        "order_no" => $order_no,
        "book" => $book
    );
    if (isset($data['promo']) && $data['promo'] == 'academica') {
            $response['promo'] = 1;
        }

        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
} else {
    $response = array(
        "message" => "Серверде қателік пайда болды: " . $conn->error,
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
