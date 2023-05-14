<?php

session_start();

// Проверка аутентификации пользователя
if (!isset($_SESSION['id'])) {
    sendErrorResponse('Пользователь не аутентифицирован');
}

$user_id = $_SESSION['id'];

// Подключение к базе данных
$servername = "localhost";
$username = "p-332754_p-332754";
$password = "Kozhbanbet1!";
$dbname = "p-332754_itbookz";

// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    sendErrorResponse('Connection failed: ' . $conn->connect_error);
}

// Запрос на получение информации о последнем выполнении задачи текущего пользователя
$sql = "SELECT question_number, rate FROM python_exercise_attempts WHERE user_id = $user_id ORDER BY id DESC LIMIT 1";

// Выполнение запроса
$result = $conn->query($sql);

// Обработка результатов
if ($result === false) {
    sendErrorResponse('Ошибка выполнения запроса: ' . $conn->error);
}

// Получение строки с информацией о последнем выполнении задачи
$row = $result->fetch_assoc();
 $percentage = round($row['rate'] * 100, 2);
// Создание объекта для хранения информации о выполнении задачи
$exerciseAttempt = array(
    'question_number' => $row['question_number'],
    'percentage' =>  $percentage,
    'user_id' => $user_id
);

// Закрытие соединения с базой данных
$conn->close();

// Отправка ответа клиенту
sendSuccessResponse($exerciseAttempt);

// Функция для отправки успешного ответа
function sendSuccessResponse($data) {
    $response = array(
        'success' => true,
        'data' => $data
    );

    sendResponse($response);
}

// Функция для отправки ошибки
function sendErrorResponse($message) {
    $response = array(
        'success' => false,
        'message' => $message
    );

    sendResponse($response);
}

// Функция для отправки ответа клиенту
function sendResponse($response) {
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}
