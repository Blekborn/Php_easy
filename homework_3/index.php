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
    $t = time();
    echo date("d-m-Y",$t);
    echo "<br>";
    echo "Now: ".date("d.m.Y h:i:s", mktime(14,10,00,7,10,2018));
    echo "<br>";
    echo mt_rand(0,1000);

?>
</body>
</html>