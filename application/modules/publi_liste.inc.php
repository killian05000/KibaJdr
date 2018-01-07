<?php

$connect = new PDO('mysql:host=mysql-tomtom.alwaysdata.net;dbname=tomtom_kiba;charset=utf8','tomtom','doucefrance1239');

$extensionValide = array('jpg','jpeg','png','gif');

$rubriques = $connect->query('SELECT * FROM rubriques ORDER BY date_time_rubriques DESC');

?>




<!DOCTYPE>

<html>
    <head>
        <title>Accueil</title>
        <meta charset = utf-8>
    </head>
    <body>
        
        <ul>
            <a href="profil.php"> retour au profil</a> <br/>
            <a href ="creerRubriques.php">creer une rubrique</a>
            <?php while($r = $rubriques->fetch()){ ?>
            <li> 
        <img src="vignette/<?=$r['id'].'.'.$extensionValide ?>" width="100"/><br/>
            
            <p>  <?= $r['date_time_rubriques'] ?> <a href="rubriques.php?id_rubriques=<?=''.$r['id_rubriques'] ?>"><?= $r['titre_rubriques']?> </a> </p>
            | <a href="creerRubriques.php?edit=<?= $r['id_rubriques'] ?>" >Modifier rubriques </a>  
            | <a href="supprimerRubriques.php?del=<?=$r['id_rubriques']?>">Supprimer rubrique</a>
            </li>
            <?php }  ?>
        </ul>
    </body>
</html>