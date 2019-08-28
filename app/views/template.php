<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" Content="IE-Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="lang" content="fr" />
    <meta name="description"
        content="Obtenez gratuitement et instantanément des taux, des outils et des analyses relatifs aux cryptomonnaies, s’appuyant sur les données les plus précises. D’autres services, tels que la conversion de devises sont également disponibles." />
    <!-- Open Graph data -->
    <meta property="og:image" content="../public/img/parrainage_fermaud_coinbase.png" />
    <meta property="og:title" content="L'outil de conversion de cryptomonnaies" />
    <meta property="og:type" content="video.movie" />
    <meta property="og:url" content="http://clement-fermaud.com" />
    <!-- Twitter Card data -->
    <meta name=”twitter:card” content=”summary” />
    <meta name=”twitter:title” content="L'outil de conversion de cryptomonnaies" />
    <meta name=”twitter:description”
        content="Obtenez gratuitement et instantanément des taux, des outils et des analyses relatifs aux cryptomonnaies, s’appuyant sur les données les plus précises. D’autres services, tels que la conversion de devises sont également disponibles." />
    <meta name=”twitter:image” content="../public/img/parrainage_fermaud_coinbase.png" />

    <link rel="shortcut icon" type="icon" href="../public/img/cryptologo.ico" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css"
        integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.18/b-1.5.4/b-colvis-1.5.4/datatables.min.js"></script>
    <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=jk5zgalrr7c3ab5mjwbfebop58ypzu99ajn1oz92f7jaca6q">
    </script>
    <title> <?= $title ?> </title>
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>
</head>

<!--<body onload="checkCookie()">-->

    <header>
        <div class="jumbotron ">
            <img src="../public/img/cryptocurrencies.png" class="headerlogo">
            <h1><a href="index.php" style="text-decoration:none" class="uppertitle">Comparateur de Crypto-Monnaies</a></h1>

        </div>
        <nav class="navbar   navbar-expand-md navbar-dark">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Crypto-Monnaies</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php?action=top10">Top 10</a>
                    </li>
                </ul>

            </div>

        </nav>
    </header>

    <!-- MAIN SECTION -->
    <section class="main">
        <?= $content ?>
    </section>

    <!-- FOOTER -->

    <!-- Footer -->
    <footer class="page-footer font-small teal pt-4">

        <!-- Footer Text -->
        <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">
                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-6 mb-md-0 mb-3">
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->
            <hr class="rgba-white-light" style="margin: 0 40%;">

        </div>
        <!-- Footer Text -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">made with <i class="fas fa-heart"></i> by
            <a href="https://clement-fermaud.com"> Clément Fermaud
                <!-- If no logged already Get user connection -->
                <?php if (empty($_SESSION)) { ?>
                <li class="nav-link active">
                    <a href="index.php?action=login"><i class="fas fa-sign-in-alt"></i></a></li>
                <!-- Deconection link -->
                <?php } else { ?>
                <li><a href="index.php?action=login"><i class="fas fa-grin"></i> <?= $_SESSION['username']; ?></a></li>
                <li><a href="index.php?action=disconnect"><i class="fas fa-sign-out-alt"></i> Se déconnecter</a></li>
                <?php } ?>
                <!---->
            </a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</body>

</html>