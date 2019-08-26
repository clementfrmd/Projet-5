<?php
include('Kapi.php');

//API All COIN
$CoinsUrl="https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest?limit=10&convert=EUR";

 $APIREST = new APIREST($CoinsUrl);
$TopCoins= $APIREST->call(
	array ('X-CMC_PRO_API_KEY:'.$ApiKey)
 
);

?>
