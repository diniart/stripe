<?php
include('Stripegateway.php');
$myStripe = new Stripegateway();
if(isset($_POST['btndel'])){
	$data = array('ID' => $_POST['ID']);

$result = $myStripe->delete_customer($data);
echo "<pre>"; print_r($result);}
?>
