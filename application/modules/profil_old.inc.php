<?php
session_start();
try{
$connect = new PDO('mysql:host=mysql-tomtom.alwaysdata.net;dbname=tomtom_kiba;charset=utf8','tomtom','doucefrance1239');
}catch (Exception $e){die('Erreur : '.$e->getMessage());}


if(isset($_SESSION['id'])){

    $requser = $connect->prepare( "SELECT * FROM users WHERE id = ? ");
    $requser->execute(array($_SESSION['id']));
    $user = $requser->fetch();
    
  

?>


    <!DOCTYPE html>

    <html>
        <head>
        </head>
        <body>
            <header>
                <?php
                    if(!empty($user['avatar'])){
                ?>
                <img src="images/<?= $user['avatar']; ?>" width="150" />
                <?php     
                    }
                ?>
                <br/>
                <br/>
                <p> Nom d'utilisateur : <?= $user['pseudo'] ?></p>
                <p> Adresse mail : <?= $user['email'] ?></p>
                <p> <?= $user['Apropo'] ?> </p>
                <a href="editionProfil.php" style="text-decoration:none;font-family:araial_decoration:none;font-family:araial;color:blue">Editer le profil </a> <br/>
                <a href="Deconnexion.php" style="text-decoration:none;font-family:arial;color:red">Deconnexion</a>
            </header>
        </body>
    </html>

<?php 
     }else {
        header('location:Connexion.php?error= Vous devez vous connecter' );
        }
?>