<?php

$alea = array(rand(0,100), rand(0,100), rand(0,100));
$data['alea'] = $alea;
$txt = "Blabla";
echo "$txt<br/>";
foreach ($alea as $value)
{
	echo "Valeur : $value<br/>";
}

?>