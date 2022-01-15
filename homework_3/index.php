<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Php</title>
</head>
<body>
<?php
	
	/*echo "Hello!";
	echo "<br>";
	echo date(DATE_RSS);
	echo "<br>";
	echo $_SERVER['HTTP_USER_AGENT'];*/
	echo "<br>";
	//include, require
    include 'second.php';
	echo "<br>";
    include 'variable.php';
	echo "<br>";
    echo "Now: ".date("d.m.Y i:s", mktime(0,14,10,7,10,2018));


?>
</body>
</html>