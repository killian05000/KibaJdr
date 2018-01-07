<?php

<h1>Bienvenue dans publication.inc.php</h1>



$connect = new PDO('mysql:host=mysql-tomtom.alwaysdata.net;dbname=tomtom_kiba;charset=utf8','tomtom','doucefrance1239');

$extensionValide = array('jpg','jpeg','png','gif');

$rubriques = $connect->query('SELECT * FROM rubriques ORDER BY date_time_rubriques DESC');


  //while($r = $rubriques->fetch()){}

?>