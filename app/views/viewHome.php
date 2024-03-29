<!-- TITLE -->
<?php $this->title = "L'outil de conversion de cryptomonnaies"; ?>

<!-- MAIN -->
<?php
$titrePage = "Capitalisation et cours des Crypto-Monnaies.";
    include ('../app/Libs/ApiAll.php');
?>

<script>
    $Allcoin = <?php echo $CallCoins; ?>;
</script>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 ">
            <div class="row">
                <div id="preloader">
                    <div id="loader">
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>Cours des Cryptomonnaies</h2>

                    <p>Obtenez gratuitement et instantanément des taux, des outils et des analyses relatifs aux cryptomonnaies, s’appuyant sur les données les plus précises. D’autres services, tels que la conversion de devises sont également disponibles.
                    </p>
                </div>
                <div class="col-md-6 text-right"><a href="https://www.coinbase.com/join/fermau_v" target="_blank"><img src="../public/img/parrainage_fermaud_coinbase_home.png" class="img-fluid coinbase" alt="Ouvrir un wallet de cryptomonnaies avec Coinbase"></a>
                </div>
            </div>


            <table class="table table-striped alltable" id="lcoin">
                <thead class="thead  text-white">

                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Coins<span class="badge-pill badge-primary align-top" id="NbrCoin"></span></th>
                        <th scope="col">Prix</th>
                        <th scope="col">Market Cap</th>
                        <th scope="col">Total en Circulation</th>
                        <th scope="col">Volume (24h)</th>
                        <th scope="col">% (1h)</th>
                        <th scope="col">% (24h)</th>
                        <th scope="col">% (7j)</th>
                        <th scope="col">Détail</th>
                    </tr>
                </thead>
                <tbody id="cour">

                </tbody>
            </table>

        </div>
    </div>
</div>
<div class="text-center">


<!-- MAIN NEWS -->

<!-- Get Last 3 articles -->
<div class="content">
<div class="w3-container w3-center w3-animate-zoom">
  <h2><i class="far fa-file-alt"></i> Dernières actus :</h2>
  <?php foreach ($articles as $article): ?>
    <article class="articles">
      <header>
        <!-- Article Titles -->
        <a href="<?= "index.php?action=article&id=" . $article['id'] ?>">
          <h3 class="articleTitle"><?= $article['title'] ?></h3>
        </a>
        <!-- Date -->
        <time>Ajouté le : <?= $article['dateArt_fr'] ?></time>
      </header>
      <!-- Articles -->
      <p><?= $article['preview'] ?></p>
      <a class="readMore" href="<?= "index.php?action=article&id=" . $article['id'] ?>">[Lire la suite...]</a>
    </article>
    <hr />
  <?php endforeach; ?>
</div>
</div>

<script>
    $(document).ready(function() {
        $('#preloader').delay().hide();

    });
</script>

<script type="text/javascript" src="js/allcoin.js"></script>