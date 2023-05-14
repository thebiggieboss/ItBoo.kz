<?php

if (isset($_POST['q'])) {
    $q = $_POST['q'];

    // Обработка файла
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    $file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    $pred = [];
    $fileToReadPred = fopen($file, "r");
    while (!feof($fileToReadPred)) {
        $pred[] = fgetcsv($fileToReadPred);
    }
    fclose($fileToReadPred);

    $gt = [];
    $predFiles = [
        1 => "output-problems/out_1.csv",
        2 => "output-problems/out_2.csv",
        3 => "output-problems/out_3.csv",
        4 => "output-problems/out_4.csv",
        5 => "output-problems/out_5.csv",
        6 => "output-problems/out_6.csv",
        7 => "output-problems/out_7.csv",
        8 => "output-problems/out_8.csv",
        9 => "output-problems/out_9.csv",
        10 => "output-problems/out_10.csv",
        11 => "output-problems/out_11.csv",
        12 => "output-problems/out_12.csv",
        13 => "output-problems/out_13.csv",
        14 => "output-problems/out_14.csv",
        15 => "output-problems/out_15.csv"
    ];
    $predFile = isset($predFiles[$q]) ? $predFiles[$q] : '';

    if (!empty($predFile)) {
        $fileToReadGt = fopen($predFile, "r");
        while (!feof($fileToReadGt)) {
            $gt[] = fgetcsv($fileToReadGt);
        }
        fclose($fileToReadGt);

        $cnt = 0;
        $count = min(count($gt), count($pred));
        for ($i = 0; $i < $count; $i++) {
            if ($pred[$i] == $gt[$i]) {
                $cnt++;
            }
        }

        $cnt = $cnt / count($gt);

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

        session_start();
		  if ($_SESSION['id']) {
                $sql = "INSERT INTO python_exercise_attempts (question_number, rate, user_id)
                VALUES (" . intval($q) . ", " . strval($cnt) . ", " . $_SESSION['id'] . ")";
				if ($conn->query($sql) === TRUE) {
					$percentage = round($cnt * 100, 2); // Рассчитываем процентное значение
					$response = array(
						'success' => true,
						'message' => 'Данные успешно сохранены',
						'cnt' => $cnt,
						'percentage' => $percentage
					);
				} else {
					$response = array(
						'success' => false,
						'message' => 'Ошибка сохранения данных'
					);
				}
				header('Content-Type: application/json');
				echo json_encode($response);
				exit;
       	 } else {
            $response = array(
                'success' => false,
                'message' => 'Есеп өткізу үшін сайтқа тіркеліңіз'
            );
            header('Content-Type: application/json');
            echo json_encode($response);
            exit;
        }
            $conn->close();

        }
    }
?>
