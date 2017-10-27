<?php
//Author: Anastasios Theocharis
$accountnumber = $_POST['accno'];
$password = $_POST['psw'];
$servername = "localhost";
$userhost = "root";
$userpassword = "7777";
$my_db = "banking_system";
$errors = $array[];

mysql_connect("$servername","$userhost","");
mysql_select_db("banking_system");

//to prevent mysql injection.
$accountnumber = stripcslashes($accountnumber);
$password = stripcslashes($password);
$accountnumber = mysql_real_escape_string($accountnumber);
$password = mysql_real_escape_string($password);

/*if (isset($_POST['register'])){
	$accountnumber = mysql_real_escape_string($_POST['account_number']);
	$password = mysql_real_escape_string($_POST['pass']);
} */

for ($i = 0; $i < len($errors); $i++){
	if (empty($accountnumber)) {
		echo "Please fill again the account number.";
		array_push($errors, "Fill the account number");	
	} elseif (empty($password)) {
		echo "Please fill again the password";
		array_push($errors, "Fill the password");
	}
}
$result = mysql_query('select * from loginsystem where AccountNumber = ' .$accountnumber. 'and password =' .$password. '');

$row = mysql_fetch_array($result);

if (count($errors) == 0) {
	return $result;
	if ($row['AccountNumber'] == $accountnumber && $row['Password'] == $password) {
		echo "Login success! Welcome&nbsp";
	} else {
		echo "Failed to login!";
}
}
}

$conn = new mysqli($servername,$username,$password);

/*if ($conn -> connect_error) {
	die("Connection Failed!". conn -> connect_error);
} else {
	echo "Connected Successfully!";
}
?> */
