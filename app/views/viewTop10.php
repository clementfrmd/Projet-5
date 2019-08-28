<!-- TITLE -->
<?php $this->title = "Top 10 des cryptos"; ?>

<?php


$an = date("Y"); 

$titrePage = "TOP 10 Des Cryto-Monnaies $an ";
include ('../app/Libs/ApiTop.php');
 ?>

<script>
    // Récupération json et trasmphormation des variables php 

    $Tcoin =
        <?php echo $TopCoins; ?>;

</script>
<h2 class="text-center"><?php echo $titrePage ?></h2><br>

<div class="container-fluid">
    <div class="row" id="Top">
    </div>
</div>
<div class="text-center">
</div>



<script type="text/javascript" src="../public/js/top.js"></script>