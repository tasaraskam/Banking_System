<?php

if (isset($_GET['account_number']) && !empty($_GET['account_number'])){
	$account_number = $_GET['account_number'];
	if (preg_match('account_number', $account_number)){
		echo "Success Login!"
	} else {
		echo "Wrong account number or password!"
		typeagain();
	}
}
?>