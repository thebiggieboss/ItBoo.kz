<?php

session_start();

if (isset($_SESSION['id'])) {
    // Сессия активна, возвращаем данные пользователя
    $response = array(
        "status" => true,
        "message" => "Сессия белсенді емес",
        "user" => array(
            "id" => $_SESSION['id'],
            "email" => $_SESSION['email'],
            "fname" => $_SESSION['fname'],
            "lname" => $_SESSION['lname'],
            "registered_date" => $_SESSION['registered_date']
        )
    );
} else {
    // Сессия не активна
    $response = array(
        "status" => false,
        "message" => "Сессия не активна"
    );
}

// Отправляем JSON-ответ
header('Content-Type: application/json');
echo json_encode($response);
exit;

?>
