<?php
require('deposit.php');
$withdraw = $_POST['mywithdraw'];
$result = mysql_query('UPDATE user SET amount = amount -' .$withdraw. 'WHERE AccountNumber = ' .$accountnumber.);

?>