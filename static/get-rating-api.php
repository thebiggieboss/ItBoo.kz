<?php

$servername = "localhost";
$username = "p-332754_p-332754";
$password = "Kozhbanbet1!";
$dbname = "p-332754_itbookz";

try {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }
   //объединяет данные из таблиц user и python_exercise_attempts, считает количество правильных решений задач пользователя (score).
    $sql = "SELECT user.fname, user.lname, COALESCE(COUNT(DISTINCT python_exercise_attempts.question_number), 0) AS score
            FROM user
            LEFT JOIN python_exercise_attempts ON user.id = python_exercise_attempts.user_id AND python_exercise_attempts.rate = 1
            GROUP BY user.id
            ORDER BY score DESC";


    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $data = array();

        while ($row = $result->fetch_assoc()) {
            $data[] = array(
                "fname" => $row['fname'],
                "lname" => $row['lname'],
                "score" => $row['score']
            );
        }

        // Сортировка результатов по убыванию значения score
        usort($data, function ($a, $b) {
            return $b['score'] - $a['score'];
        });

        $response = array(
            "status" => "true",
            "message" => "Деректер қабылданды",
            "users" => $data
        );
    } else {
        $response = array(
            "status" => "false",
            "message" => "Пайдаланушы бойынша мәлімет жоқ"
        );
    }

    header('Content-Type: application/json');
    echo json_encode($response);

    $conn->close();
} catch (Exception $e) {
    $response = array(
        "status" => "false",
        "message" => "Ошибка сервера: " . $e->getMessage()
    );

    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
