<?php

define('DB_NAME', 'webserver');
define('DB_USER', 'root');
define('DB_PASSWORD', 'Bv10221964');
define('DB_HOST', '127.0.0.1');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
	die('Could not connect: ' . mysql_error());

}

$db_selected = mysql_select_db(DB_NAME, $link);

if(!$db_selected) {
	die('Can\'t use ' . DB_NAME . ' : ' . mysql_error());

}


$value1 = $_POST['input2'];
$value2 = $_POST['input3'];
$value3 = $_POST['input4'];



$sql = "INSERT INTO user (firstname,lastname,emailaddress) VALUES ('$value1','$value2','$value3')";


if (!mysql_query($sql)) {
	die('Error: ' . mysql_error());



mysql_close();
}

echo "Your information has been submitted successfully.";
?>



