<!DOCTYPE html>
<html>
<head>
	<title>First PHP</title>
</head>
<body>
<?php

$city = $_GET['city'];

$city = str_replace(" ", "", $city);

$contents = file_get_contents("http://api.openweathermap.org/data/2.5/forecast/city?id=". $city ."&APPID=66bf970174a1685133d1dd1a63eb06d");


echo $contents[1];

?>
</body>
</html>	
