<?php

include("profile.inc.php");

$alea = array(rand(0,100), rand(0,100), rand(0,100));
$data['alea'] = $alea;
$txt = "Blabla";
echo "$txt<br/>";
foreach ($alea as $value)
{
	echo "Valeur : $value<br/>";
}

echo "<br><br>";

foreach ($data as $value)
{
	foreach ($value as $value2)
	{
		echo "Valeur : $value2<br/>";
	}
}


?>