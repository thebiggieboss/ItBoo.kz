<?php

session_start();

if (isset($_SESSION['id'])) {
    // Уничтожаем сессию
    session_unset();
    session_destroy();

    $response = array(
        "status" => true,
        "message" => "Жүйеден шығу сәтті өтті"
    );
} else {
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
