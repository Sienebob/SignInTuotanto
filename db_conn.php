<?php
//luodaan muuttujat databaselle
$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "tuotantodb";

//yhdistetään em. muuttujilla
$conn = mysqli_connect($sname, $unmae, $password, $db_name);

//annetaan error jos yhdistyminen ei tapahdu
if (!$conn) {
	echo "Connection failed!";
}