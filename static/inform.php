<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>itBoo.kz</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top" style="background: #333;">

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav" style="background: #222;">
            <div class="container px-5">
                <a class="navbar-brand fw-bold" href="https://www.itboo.kz" style="color: #fff; ">
                    itBoo.kz
                    <!-- <span style="color: #1abc9c;">academy</span> -->
                </a>
                <button class="navbar-toggler text-uppercase font-weight-bold text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="background: #000;">
                    <font style="color: #fff; ">Меню</font>
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php#content" style="color: white;">Кітап жайлы</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php#about" style="color: white;">Кітаптың авторы</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php#buy" style="color: white;">Кітапты сатып алу</a></li>
                    </ul>
                </div>


            </div>
        </nav>

        <!-- Mashead header-->
        <header class="masthead" style="background: #333;" id="page-top">
            <div class="container px-5" sty>
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <!-- Mashead text and app badges-->
                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
                            <!-- <a class="lead fw-normal text-muted mb-5" style="text-decoration: none;"><img src="arrow.png" style="width: 32px;" />Басты бет</a>
                            <br/><br/> -->
                            <p class="lead fw-normal mb-5" style="color: #fff; font-size: 1em;">
                                <?php
                                    if (isset($_GET['status'])) {
                                        if ($_GET['status'] == 1) {
                                            if (isset($_GET['order'])) {
                                ?>
                                                <h2 style="color: #ffda79;">Тапсырысыңыз қабылданды.</h2> <br/>
                                                <p style="color: white;">
                                                    Кітап бағасы
													<?php
														if (isset($_GET['book']) && $_GET['book'] == 1) {
															if (isset($_GET['promo']) && $_GET['promo'] == 1) {
													?>
														<b style="color: #ffda79;">4000 теңге</b>.
													<?php
															} else {
													?>
														<b style="color: #ffda79;">4900 теңге</b>.
													<?php
															}
														} else if (isset($_GET['book']) && $_GET['book'] == 2) {
													?>
														<b style="color: #ffda79;">0 теңге</b>.
													<?php
														}  else if (isset($_GET['book']) && $_GET['book'] == 3) {
													?>
														<b style="color: #ffda79;">15000 теңге</b>.
													<?php
														}  else if (isset($_GET['book']) && $_GET['book'] == 4) {
													?>
														<b style="color: #ffda79;">10000 теңге</b>.
													<?php
														}  else if (isset($_GET['book']) && $_GET['book'] == 5) {
													?>
														<b style="color: #ffda79;">7000 теңге</b>.
													<?php
														}  else if (isset($_GET['book']) && $_GET['book'] == 6) {
													?>
														<b style="color: #ffda79;">10000 теңге</b>.
													<?php
														}  else if (isset($_GET['book']) && $_GET['book'] == 7) {
													?>
														<b style="color: #ffda79;">10000 теңге</b>.
													<?php
														}
													?>

													<br/>
                                                    Мына Kaspi картасына төлем ақы жасай аласыз. <br/>
                                                    <b style="color: #ffda79;">4400 4301 6276 0281 (Мағжан Қ) </b><br/>
                                                    Төлем ақы жасағанда тапсырыс нөмірін жазып жіберіңіз.
                                                    <br/><br/><br/>
                                                    Тапсырыс нөмірі: <br/>
                                                    <b style="color: #ffda79; font-size: 3em; font-weight: 100;">
                                                        <?php
                                                            echo $_GET['order'];
                                                        ?>
                                                    </b>
                                                    <br/><br/><br/>

                                                    Төлем ақы жасалғаннан кейін сіздің электронды поштаңызға кітап / курс 1 күн ішінде  жіберіледі.
                                                </p>
                                                <br/>
                                                <div class="d-flex flex-column flex-lg-row align-items-center">
                                                    <a class="me-lg-3 mb-4 mb-lg-0" style="border: 0px solid #AAAAAA; text-decoration: none; color: #000; padding: 20px; border-radius: 12px; background: #ffda79;" href="index.php">Басты бетке көшу</a>
                                                </div>
                                <?php
                                            }
                                        }
                                    }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </header>





        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
