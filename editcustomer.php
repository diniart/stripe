<?php
include ('Stripegateway.php');
$myStripe = new Stripegateway();
if(isset($_POST['btnedit'])){
$data = array('ID' => $_POST['ID'],

			 'description' =>$_POST['description'] );
$result = $myStripe->update_customer($data);
	echo "<pre>"; print_r($result);}

	?>