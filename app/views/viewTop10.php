<?php


$an = date("Y"); 

$titrePage = "TOP 10 Des Cryto-Monnaies $an ";
include ('Libs/ApiTop.php');
include ('views/navbar.php');
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
<!--<a href="https://www.ledger.com?r=8dd75a938fc1"><img class="img-fluid" width=728 height=90 alt="Ledger Nano S - The secure hardware wallet" src="https://www.ledgerwallet.com/images/promo/nano-s/ledger_nano-s_7-2-8x9-0.jpg"></a>-->
</div>



<script type="text/javascript" src="../public/js/top.js"></script>
<?php include ('template.php') ?>