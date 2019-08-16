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
    <meta property="og:image" content="img/logo.gif" />
    <meta property="og:title" content="The Rock" />
    <meta property="og:type" content="video.movie" />
    <meta property="og:url" content="http://www.imdb.com/title/tt0117500/" />
    <!-- Twitter Card data -->
    <meta name=”twitter:card” content=”summary” />
    <meta name=”twitter:site” content=”@yoursite” />
    <meta name=”twitter:title” content=”Your Title” />
    <meta name=”twitter:description” content=”Your description.” />
    <meta name=”twitter:image” content=”https://where-your-image-is-hosted/name.jpg” />

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
    <title>L'outil de conversion de cryptomonnaies<?php echo $titrePage; ?></title>
</head>

<body>

    <header>
        <div class="jumbotron ">
            <h1>Comparateur de Crypto-Monnaies</h1>

        </div>
        <nav class="navbar   navbar-expand-md navbar-dark">
    <a class="nav-link" href="index.php">
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Crypto-Monnaies</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="top10.php">Top 10</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="app/views/viewArticle.php">News</a>
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

<footer class="page-footer font-small indigo">
      <!-- Grid column -->

    </div>
    <!-- Grid row-->
    <hr class="rgba-white-light" style="margin: 0 15%;">

    <!-- Grid row-->
    <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

      <!-- Grid column -->
      <div class="col-md-8 col-12 mt-5">
        <p style="line-height: 1.7rem">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
          accusantium doloremque laudantium, totam rem
          aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
          explicabo.
          Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
      </div>
      <!-- Grid column -->
  </div>
</footer>
</body>


</html>

