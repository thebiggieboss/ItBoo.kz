<!DOCTYPE html>
<html>
	<head>
		<title>
			Admin panel
		</title>
		<style type="text/css">
			body {
				margin: 10px;
				padding: 10px;
				font-family: Helvetica;
				background: #333;
				font-size: 1em;
			}
		</style>
	</head>
	<body>

		<?php
		error_reporting(E_ALL);
    error_reporting(-1);
    ini_set('error_reporting', E_ALL);

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

			$sql = "SELECT count(*) AS cnt FROM visits WHERE page_id = 0";
			$result = $conn->query($sql);

			$cnt0 = 0;
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			    	$cnt0 = $row['cnt'];
			    }
			}

			$sql = "SELECT count(*) AS cnt FROM exercise_attempts";
			$result = $conn->query($sql);

			$cnt1 = 0;
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			    	$cnt1 = $row['cnt'];
			    }
			}

			$sql = "SELECT count(*) AS cnt FROM exercise_attempts WHERE rate > 0.98";
			$result = $conn->query($sql);

			$cnt3 = 0;
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			    	$cnt3 = $row['cnt'];
			    }
			}

			$sql = "SELECT count(*) AS cnt FROM visits WHERE page_id = 2";
			$result = $conn->query($sql);

			$cnt2 = 0;
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			    	$cnt2 = $row['cnt'];
			    }
			}

			$sql = "SELECT count(*) AS cnt FROM visits WHERE page_id = 1000";
			$result = $conn->query($sql);

			$cntRating = 0;
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			    	$cntRating = $row['cnt'];
			    }
			}

			$sql = "SELECT count(*) AS cnt FROM visits WHERE page_id = 100";
			$result = $conn->query($sql);

			$cntPyProblems = 0;
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			    	$cntPyProblems = $row['cnt'];
			    }
			}

			$sql = "SELECT count(*) AS cnt FROM visits WHERE page_id = 101";
			$result = $conn->query($sql);

			$cntPy1 = 0;
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			    	$cntPy1 = $row['cnt'];
			    }
			}

			$sql = "SELECT count(*) AS cnt FROM visits WHERE page_id = 102";
			$result = $conn->query($sql);

			$cntPy2 = 0;
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			    	$cntPy2 = $row['cnt'];
			    }
			}

			$sql = "SELECT count(*) AS cnt FROM visits WHERE page_id = 103";
			$result = $conn->query($sql);

			$cntPy3 = 0;
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			    	$cntPy3 = $row['cnt'];
			    }
			}

			$sql = "SELECT count(*) AS cnt FROM visits WHERE page_id = 104";
			$result = $conn->query($sql);

			$cntPy4 = 0;
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			    	$cntPy4 = $row['cnt'];
			    }
			}

			$sql = "SELECT count(*) AS cnt FROM visits WHERE page_id = 105";
			$result = $conn->query($sql);

			$cntPy5 = 0;
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			    	$cntPy5 = $row['cnt'];
			    }
			}

			$sql = "SELECT count(*) AS cnt FROM visits WHERE page_id = 106";
			$result = $conn->query($sql);

			$cntPy6 = 0;
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			    	$cntPy6 = $row['cnt'];
			    }
			}

			$sql = "SELECT count(*) AS cnt FROM visits WHERE page_id = 107";
			$result = $conn->query($sql);

			$cntPy7 = 0;
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			    	$cntPy7 = $row['cnt'];
			    }
			}

			$sql = "SELECT count(*) AS cnt FROM visits WHERE page_id = 108";
			$result = $conn->query($sql);

			$cntPy8 = 0;
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			    	$cntPy8 = $row['cnt'];
			    }
			}

			$sql = "SELECT count(*) AS cnt FROM visits WHERE page_id = 109";
			$result = $conn->query($sql);

			$cntPy9 = 0;
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			    	$cntPy9 = $row['cnt'];
			    }
			}

			$sql = "SELECT count(*) AS cnt FROM visits WHERE page_id = 110";
			$result = $conn->query($sql);

			$cntPy10 = 0;
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			    	$cntPy10 = $row['cnt'];
			    }
			}
		?>

		<p style="color: white; font-size: 1em; font-weight: 100;">
			Машинаны үйрету кітабы
		</p>
		<table align="center" cellpadding="10" cellspacing="10" style="border: 1px solid white; border-radius: 12px; width: 100%;">

			<tr>
				<td style="border-right: 1px solid white;  width: 25%;">
					<p style="text-align: center; color: white; font-size: 2em;">
						<?php
							echo $cnt0;
						?>
					</p>
					<p style="color: #aaa; text-align: center;">
						Алғашқы бет
					</p>
				</td>
				<td style="border-right: 1px solid white;  width: 25%;">
					<p style="text-align: center; color: white; font-size: 2em;">
						<?php
							echo $cnt1;
						?>
					</p>
					<p style="color: #aaa; text-align: center;">
						Есеп өткізгендер
					</p>
				</td>
				<td style="border-right: 1px solid white;width: 25%;">
					<p style="text-align: center; color: white; font-size: 2em;">
						<?php
							echo $cnt3;
						?>
					</p>
					<p style="color: #aaa; text-align: center;">
						Есеп толығымен шығарғандар
					</p>
				</td>
				<td style=";">
					<p style="text-align: center; color: white; font-size: 2em;">
						<?php
							echo $cnt2;
						?>
					</p>
					<p style="color: #aaa; text-align: center;">
						Есеп
					</p>
				</td>
			</tr>
		</table>
		<br/>
		<p style="color: white; font-size: 1em; font-weight: 100;">
			Python кітабы
		</p>
		<table align="center" cellpadding="5" cellspacing="5" style="border: 1px solid white; border-radius: 12px; width: 100%;">
			<tr>
				<td style="border-right: 1px solid white; border-bottom: 1px solid white; width: 15%;" colspan="2">
					<p style="text-align: center; color: white; font-size: 2em;">
						<?php
							echo $cntPyProblems;
						?>
					</p>
					<p style="color: #aaa; text-align: center;">
						Python есептер
					</p>
				</td>
				<td style="border-right: 1px solid white; border-bottom: 1px solid white; width: 15%;" colspan="2">
					<p style="text-align: center; color: white; font-size: 2em;">
						<?php
							echo $cntRating;
						?>
					</p>
					<p style="color: #aaa; text-align: center;">
						Рейтинг
					</p>
				</td>

				<td style="border-right: 1px solid white; border-bottom: 1px solid white; width: 15%;">
					<p style="text-align: center; color: white; font-size: 2em;">
						<?php
							echo $cntPy1;
						?>
					</p>
					<p style="color: #aaa; text-align: center;">
						1 есеп
					</p>
				</td>
				<td style="border-right: 1px solid white; border-bottom: 1px solid white; width: 15%;">
					<p style="text-align: center; color: white; font-size: 2em;">
						<?php
							echo $cntPy2;
						?>
					</p>
					<p style="color: #aaa; text-align: center;">
						2 есеп
					</p>
				</td>
				<td style="border-right: 1px solid white; border-bottom: 1px solid white; width: 15%;">
					<p style="text-align: center; color: white; font-size: 2em;">
						<?php
							echo $cntPy3;
						?>
					</p>
					<p style="color: #aaa; text-align: center;">
						3 есеп
					</p>
				</td>
				<td style="border-bottom: 1px solid white; width: 15%;">
					<p style="text-align: center; color: white;  font-size: 2em;">
						<?php
							echo $cntPy4;
						?>
					</p>
					<p style="color: #aaa; text-align: center;">
						4 есеп
					</p>
				</td>

			</tr>
			<tr>
				<td style="border-right: 1px solid white; width: 15%;" colspan="2">
					<p style="text-align: center; color: white; font-size: 2em;">
						<?php
							echo $cntPy5;
						?>
					</p>
					<p style="color: #aaa; text-align: center;">
						5 есеп
					</p>
				</td>
				<td style="border-right: 1px solid white;  width: 15%;" colspan="2">
					<p style="text-align: center; color: white; font-size: 2em;">
						<?php
							echo $cntPy6;
						?>
					</p>
					<p style="color: #aaa; text-align: center;">
						6 есеп
					</p>
				</td>

				<td style="border-right: 1px solid white; width: 15%;">
					<p style="text-align: center; color: white; font-size: 2em;">
						<?php
							echo $cntPy7;
						?>
					</p>
					<p style="color: #aaa; text-align: center;">
						7 есеп
					</p>
				</td>
				<td style="border-right: 1px solid white; width: 15%;">
					<p style="text-align: center; color: white; font-size: 2em;">
						<?php
							echo $cntPy8;
						?>
					</p>
					<p style="color: #aaa; text-align: center;">
						8 есеп
					</p>
				</td>
				<td style="border-right: 1px solid white; width: 15%;">
					<p style="text-align: center; color: white; font-size: 2em;">
						<?php
							echo $cntPy9;
						?>
					</p>
					<p style="color: #aaa; text-align: center;">
						9 есеп
					</p>
				</td>
				<td>
					<p style="text-align: center; color: white; font-size: 2em;">
						<?php
							echo $cntPy10;
						?>
					</p>
					<p style="color: #aaa; text-align: center;">
						10 есеп
					</p>
				</td>

			</tr>
		</table>
		<br/>
		<p style="color: white; font-size: 1em; font-weight: 100;">
			Кіру статистикасы
		</p>


		<?php

			$sql = "SELECT count(*) AS cnt FROM visits WHERE date_visited = '" . date("Y.m.d") . "'";
			$result = $conn->query($sql);

			$cnt1 = 0;
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			    	$cnt1 = $row['cnt'];
			    }
			}

			$sql = "SELECT count(*) AS cnt FROM visits WHERE date_visited = '" . date('Y.m.d',strtotime("-1 days")) . "'";
			$result = $conn->query($sql);

			$cnt2 = 0;
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			    	$cnt2 = $row['cnt'];
			    }
			}

			$sql = "SELECT count(*) AS cnt FROM visits WHERE date_visited = '" . date('Y.m.d',strtotime("-2 days")) . "'";
			$result = $conn->query($sql);

			$cnt3 = 0;
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			    	$cnt3 = $row['cnt'];
			    }
			}

			$sql = "SELECT count(*) AS cnt FROM visits WHERE date_visited = '" . date('Y.m.d',strtotime("-3 days")) . "'";
			$result = $conn->query($sql);

			$cnt4 = 0;
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			    	$cnt4 = $row['cnt'];
			    }
			}

			$sql = "SELECT count(*) AS cnt FROM visits WHERE date_visited = '" . date('Y.m.d',strtotime("-4 days")) . "'";
			$result = $conn->query($sql);

			$cnt5 = 0;
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			    	$cnt5 = $row['cnt'];
			    }
			}

			$sql = "SELECT count(*) AS cnt FROM visits WHERE date_visited = '" . date('Y.m.d',strtotime("-5 days")) . "'";
			$result = $conn->query($sql);

			$cnt6 = 0;
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			    	$cnt6 = $row['cnt'];
			    }
			}

			$sql = "SELECT count(*) AS cnt FROM visits WHERE date_visited = '" . date('Y.m.d',strtotime("-6 days")) . "'";
			$result = $conn->query($sql);

			$cnt7 = 0;
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			    	$cnt7 = $row['cnt'];
			    }
			}

		?>

		<table style="width: 100%;"cellpadding="10" cellspacing="10">
			<tr>
				<?php
					$total = $cnt0 + $cnt1 + $cnt2 + $cnt3 + $cnt4 + $cnt5 + $cnt6 + $cnt7;
				?>
				<td valign="bottom" style="border-radius: 12px; border: 1px solid white; color: white;"><center style="font-size: 3em;"><?php echo "<div style='width: 40px; height: " . (int)(($cnt1 / $total) * 100) . "px; background: #ffda79;'></div>";?><?php echo $cnt1;?><br></center><center><p style='font-size: 1em;'>бүгін</p></center></td>
				<td valign="bottom" style="color: white;"><center style="font-size: 3em;"><?php echo "<div style='width: 40px; height: " . (int)(($cnt2 / $total) * 100) . "px; background: #ffda79;'></div>";?><?php echo $cnt2;?><br></center><center><p style='font-size: 1em;'>-1 күн</p></center></td>
				<td valign="bottom" style="color: white;"><center style="font-size: 3em;"><?php echo "<div style='width: 40px; height: " . (int)(($cnt3 / $total) * 100) . "px; background: #ffda79;'></div>";?><?php echo $cnt3;?><br></center><center><p style='font-size: 1em;'>-2 күн</p></center></td>
				<td valign="bottom" style="color: white;"><center style="font-size: 3em;"><?php echo "<div style='width: 40px; height: " . (int)(($cnt4 / $total) * 100) . "px; background: #ffda79;'></div>";?><?php echo $cnt4;?><br></center><center><p style='font-size: 1em;'>-3 күн</p></center></td>
				<td valign="bottom" style="color: white;"><center style="font-size: 3em;"><?php echo "<div style='width: 40px; height: " . (int)(($cnt5 / $total) * 100) . "px; background: #ffda79;'></div>";?><?php echo $cnt5;?><br></center><center><p style='font-size: 1em;'>-4 күн</p></center></td>
				<td valign="bottom" style="color: white;"><center style="font-size: 3em;"><?php echo "<div style='width: 40px; height: " . (int)(($cnt6 / $total) * 100) . "px; background: #ffda79;'></div>";?><?php echo $cnt6;?><br></center><center><p style='font-size: 1em;'>-5 күн</p></center></td>
				<td valign="bottom" style="color: white;"><center style="font-size: 3em;"><?php echo "<div style='width: 40px; height: " . (int)(($cnt7 / $total) * 100) . "px; background: #ffda79;'></div>";?><?php echo $cnt7;?><br></center><center><p style='font-size: 1em;'>-6 күн</p></center></td>
			</tr>
		</table>

		<br/>
		<h2 style="color: white; font-weight: 100;">
			Есеп шығарушылар
		</h2>
		<table style="width: 100%; border-collapse: collapse;" align="center" cellpadding="5" cellspacing="5">
			<th style="background: #222;">
				<p style="color: white;">
					#
				</p>
			</th>
			<th style="background: #222;">
				<p style="color: white;">
					Аты
				</p>
			</th>
			<th style="background: #222;">
				<p style="color: white;">
					Тегі
				</p>
			</th>

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

				$sql = "SELECT * FROM user";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					$cnt = 0;
					session_start();
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				    	$cnt++;
			?>
					<tr style="border-bottom: 1px solid #aaa;">
						<td>
							<p style="color: white; text-align: center;">
								<?php
									echo $cnt;
								?>
							</p>
						</td>
						<td>
							<p style="color: white; text-align: center;">
								<?php
									echo $row['fname'];
								?>
							</p>
						</td>
						<td>
							<p style="color: white; text-align: center;">
								<?php
									echo $row['lname'];
								?>
							</p>
						</td>
					</tr>
			<?php
				    }
				}
				$conn->close();
			?>
		</table>
		<br>

		<h2 style="color: white; font-weight: 100;">
			Сатып алушылар
		</h2>
		<table style="width: 100%; border-collapse: collapse;" align="center" cellpadding="5" cellspacing="5">
			<th style="background: #222;">
				<p style="color: white;">
					#
				</p>
			</th>
			<th style="background: #222;">
				<p style="color: white;">
					Тапсырыс нөмірі
				</p>
			</th>
			<th style="background: #222;">
				<p style="color: white;">
					Аты
				</p>
			</th>
			<th style="background: #222;">
				<p style="color: white;">
					Тегі
				</p>
			</th>
			<th style="background: #222;">
				<p style="color: white;">
					Email
				</p>
			</th>
			<th style="background: #222;">
				<p style="color: white;">
					Whatsapp
				</p>
			</th>
			<th style="background: #222;">
				<p style="color: white;">
					Promo
				</p>
			</th>
			<th style="background: #222;">
				<p style="color: white;">
					Кітап
				</p>
			</th>
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

				$sql = "SELECT * FROM ml WHERE status = 1";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					$cnt = 0;
					session_start();
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				    	$cnt++;
			?>
					<tr style="border-bottom: 1px solid #aaa;">
						<td>
							<p style="color: white; text-align: center;">
								<?php
									echo $cnt;
								?>
							</p>
						</td>
						<td>
							<p style="color: white; text-align: center;">
								<?php
									echo $row['order_no'];
								?>
							</p>
						</td>
						<td>
							<p style="color: white; text-align: center;">
								<?php
									echo $row['fname'];
								?>
							</p>
						</td>
						<td>
							<p style="color: white; text-align: center;">
								<?php
									echo $row['lname'];
								?>
							</p>
						</td>
						<td>
							<p style="color: white; text-align: center;">
								<?php
									echo $row['email'];
								?>
							</p>
						</td>
						<td>
							<p style="color: white; text-align: center;">
								<?php
									echo $row['phone'];
								?>
							</p>
						</td>
						<td>
							<p style="color: white; text-align: center;">
								<?php
									echo $row['promo'];
								?>
							</p>
						</td>
						<td>
							<p style="color: white; text-align: center;">
								<?php
									echo $row['book'];
								?>
							</p>
						</td>
					</tr>
			<?php
				    }
				}
				$conn->close();
			?>
		</table>
		<br/>
		<hr style="border: 1px solid #222;" />
		<br/>
		<h2 style="color: white; font-weight: 100;">
			Тапсырыс бергендер
		</h2>
		<table style="width: 100%; border-collapse: collapse;" align="center" cellpadding="5" cellspacing="5">
			<th style="background: #222;">
				<p style="color: white;">
					#
				</p>
			</th>
			<th style="background: #222;">
				<p style="color: white;">
					Тапсырыс нөмірі
				</p>
			</th>
			<th style="background: #222;">
				<p style="color: white;">
					Аты
				</p>
			</th>
			<th style="background: #222;">
				<p style="color: white;">
					Тегі
				</p>
			</th>
			<th style="background: #222;">
				<p style="color: white;">
					Email
				</p>
			</th>
			<th style="background: #222;">
				<p style="color: white;">
					Whatsapp
				</p>
			</th>
			<th style="background: #222;">
				<p style="color: white;">
					Promo
				</p>
			</th>
			<th style="background: #222;">
				<p style="color: white;">
					Кітап
				</p>
			</th>
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

				$sql = "SELECT * FROM ml WHERE status = 0";
				$result = $conn->query($sql);

				$cnt = 0;

				if ($result->num_rows > 0) {
					session_start();
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				    	$cnt++;
			?>
					<tr style="border-bottom: 1px solid #aaa;">
						<td>
							<p style="color: white; text-align: center;">
								<?php
									echo $cnt;
								?>
							</p>
						</td>
						<td>
							<p style="color: white; text-align: center;">
								<?php
									echo $row['order_no'];
								?>
							</p>
						</td>
						<td>
							<p style="color: white; text-align: center;">
								<?php
									echo $row['fname'];
								?>
							</p>
						</td>
						<td>
							<p style="color: white; text-align: center;">
								<?php
									echo $row['lname'];
								?>
							</p>
						</td>
						<td>
							<p style="color: white; text-align: center;">
								<?php
									echo $row['email'];
								?>
							</p>
						</td>
						<td>
							<p style="color: white; text-align: center;">
								<?php
									echo $row['phone'];
								?>
							</p>
						</td>
						<td>
							<p style="color: white; text-align: center;">
								<?php
									echo $row['promo'];
								?>
							</p>
						</td>
						<td>
							<p style="color: white; text-align: center;">
								<?php
									echo $row['book'];
								?>
							</p>
						</td>
					</tr>
			<?php
				    }
				}
				$conn->close();
			?>
		</table>
		<br/>
		<hr style="border: 1px solid #222;" />
		<br/>
		<h2 style="color: white; font-weight: 100;">
			Сыйлыққа бергендер
		</h2>
		<table style="width: 100%; border-collapse: collapse;" align="center" cellpadding="5" cellspacing="5">
			<th style="background: #222;">
				<p style="color: white;">
					#
				</p>
			</th>
			<th style="background: #222;">
				<p style="color: white;">
					Тапсырыс нөмірі
				</p>
			</th>
			<th style="background: #222;">
				<p style="color: white;">
					Аты
				</p>
			</th>
			<th style="background: #222;">
				<p style="color: white;">
					Тегі
				</p>
			</th>
			<th style="background: #222;">
				<p style="color: white;">
					Email
				</p>
			</th>
			<th style="background: #222;">
				<p style="color: white;">
					Whatsapp
				</p>
			</th>
			<th style="background: #222;">
				<p style="color: white;">
					Promo
				</p>
			</th>
			<th style="background: #222;">
				<p style="color: white;">
					Кітап
				</p>
			</th>
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

				$sql = "SELECT * FROM ml WHERE status = 3";
				$result = $conn->query($sql);

				$cnt = 0;

				if ($result->num_rows > 0) {
					session_start();
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				    	$cnt++;
			?>
					<tr style="border-bottom: 1px solid #aaa;">
						<td>
							<p style="color: white; text-align: center;">
								<?php
									echo $cnt;
								?>
							</p>
						</td>
						<td>
							<p style="color: white; text-align: center;">
								<?php
									echo $row['order_no'];
								?>
							</p>
						</td>
						<td>
							<p style="color: white; text-align: center;">
								<?php
									echo $row['fname'];
								?>
							</p>
						</td>
						<td>
							<p style="color: white; text-align: center;">
								<?php
									echo $row['lname'];
								?>
							</p>
						</td>
						<td>
							<p style="color: white; text-align: center;">
								<?php
									echo $row['email'];
								?>
							</p>
						</td>
						<td>
							<p style="color: white; text-align: center;">
								<?php
									echo $row['phone'];
								?>
							</p>
						</td>
						<td>
							<p style="color: white; text-align: center;">
								<?php
									echo $row['promo'];
								?>
							</p>
						</td>
						<td>
							<p style="color: white; text-align: center;">
								<?php
									echo $row['book'];
								?>
							</p>
						</td>
					</tr>
			<?php
				    }
				}
				$conn->close();
			?>
		</table>
	</body>
</html>
