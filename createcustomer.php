<?php
include ('Stripegateway.php');
$myStripe = new Stripegateway();
if(isset($_POST['btnsubmit2'])){
	$data = array('email' => $_POST['email'],
		'description' => $_POST['description']);
	$result = $myStripe->create_customer($data);
	echo "<pre>"; print_r($result);
}
?>