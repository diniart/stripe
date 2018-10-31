<?php
include('Stripegateway.php');
$myStripe = new Stripegateway();
// contoh panggil yg edit
$data=["ID"=>"ch_1DQQE8BcUnBaX3ka39FHr0V9",
	   "description"=>"korban hati"];



echo "<h1> contoh update:</h1>";	   
$result = $myStripe->update_charger($data);
echo "<pre>";print_r($result);

echo "<h1> contoh panggil payment detail</h1>";
$detail = $myStripe->payment_detail("ch_1DQQE8BcUnBaX3ka39FHr0V9");
echo "<pre>";print_r($detail);
?>
