<?php
include ('Kapi.php');

// Api info
$CoinsInfoUrl="https://pro-api.coinmarketcap.com/v1/cryptocurrency/info?symbol=$Isymbol";
// API TEST SANDBOX
//$CoinsInfoUrl="https://sandbox-api.coinmarketcap.com/v1/cryptocurrency/info?symbol=$Isymbol";
$APIREST = new APIREST($CoinsInfoUrl);
$InfoCoin= $APIREST->call(
	array ('X-CMC_PRO_API_KEY:'.$ApiKey)
 );

// Api Quotes

$CoinUrl="https://pro-api.coinmarketcap.com/v1/cryptocurrency/quotes/latest?symbol=$Isymbol&convert=EUR";

// Api TEST Quotes
//$CoinUrl="https://sandbox-api.coinmarketcap.com/v1/cryptocurrency/quotes/latest?symbol=$Isymbol&convert=EUR,BTC";
$APIREST = new APIREST($CoinUrl);
$Qcoin= $APIREST->call(
	array ('X-CMC_PRO_API_KEY:'.$ApiKey)
    );

$CoinUrl2="https://pro-api.coinmarketcap.com/v1/cryptocurrency/quotes/latest?symbol=$Isymbol&convert=BTC";

// Api TEST Quotes
//$CoinUrl="https://sandbox-api.coinmarketcap.com/v1/cryptocurrency/quotes/latest?symbol=$Isymbol&convert=EUR,BTC";
$APIREST = new APIREST($CoinUrl2);
$Qcoin2= $APIREST->call(
	array ('X-CMC_PRO_API_KEY:'.$ApiKey)
    );


    ?>