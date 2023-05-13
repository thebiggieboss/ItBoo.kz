<?php

$book = $_GET['book'];
$promo = $_GET['promo'];

$response = array();

if ($book == 1) {
    if (isset($promo) && $promo == 1) {
        $response['price'] = "4000 теңге";
    } else {
        $response['price'] = "4900 теңге";
    }
} elseif ($book == 2) {
    $response['price'] = "0 теңге";
} elseif ($book == 3) {
    $response['price'] = "15000 теңге";
} elseif ($book == 4) {
    $response['price'] = "10000 теңге";
} elseif ($book == 5) {
    $response['price'] = "7000 теңге";
} elseif ($book == 6) {
    $response['price'] = "10000 теңге";
} elseif ($book == 7) {
    $response['price'] = "10000 теңге";
}

// Отправляем JSON-ответ
header('Content-Type: application/json');
echo json_encode($response);
exit;

?>
