<?php

if (isset($_GET['accountnumber']) && !empty($_GET['accountnumber'])){
	$accountnumber = $_GET['accountnumber'];
	if (preg_match('accountnumber', $accountnumber)){
		echo "Success Login!"
	} else {
		echo "Wrong account number or password!"
		typeagain(); //prepei na thn ftiaxw.
	}
}
?>
