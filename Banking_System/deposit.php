<?php
$servername = "localhost";
$userhost = "root";
$my_db = "banking_system";
require('loginsystem.php');
mysql_connect("$servername","$userhost","") or die(mysql_error());

mysql_select_db("my_db") or die ("cannot select DB");

$deposit = $_POST['mydeposit'];
$result = mysql_query("UPDATE user SET amount = amount +" .$deposit. " WHERE AccountNumber = ".$accountnumber.);

echo "Money deposited successfully!";

?>