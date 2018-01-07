<?php

$connect = new PDO('mysql:host=localhost;dbname=jdr;charset=utf8','root','');

$extensionValide = array('jpg','jpeg','png','gif');

$rubriques = $connect->query('SELECT * FROM t_categorie_cat ');

 
  while($r = $rubriques->fetch()){ 
        $categorie['ID'] =  $r['CAT_ID'];
        $categorie['LABEL'] = $r['CAT_LABEL'];
        $categorie['DESCRIPTION'] = $r['CAT_DESCRIPTION'];
        $categorie['ILLUSTRATION'] =  $r['CAT_ILLUSTRATION'];

	$data['INFORMATIONS'][] = $categorie;
	
	       
}

?>