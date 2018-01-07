<?php
session_start();
try{
$connect = new PDO('mysql:host=mysql-tomtom.alwaysdata.net;dbname=tomtom_kiba;charset=utf8','tomtom','doucefrance1239');
}catch (Exception $e){die('Erreur : '.$e->getMessage());}


if(isset($_SESSION['id'])){

    
   if(isset($_GET['idProprio']) AND !empty($_GET['idProprio'])){
       
       
       
       $id_proprio = htmlspecialchars($_GET['idProprio']);
       
       $info_proprio = $connect->prepare('SELECT * FROM users WHERE id = ?');
       $info_proprio->execute(array($id_proprio));
       
       if($info_proprio->rowcount() == 1){
           
            $info_proprio = $info_proprio->fetch();
            $pseudo_proprio = $info_proprio['pseudo'];
            $Apropo_proprio = $info_proprio['Apropo'];
            $avatar_proprio = $info_proprio['avatar'];
           
       }else {
           $msg = "erreur du chargement du profil";
       }
       
   } else {
       $msg = "erreur du chargement du profil";
   }
    
  

?>


    <!DOCTYPE html>

    <html>
        <head>
        </head>
        <body>
            <header>
                <?php
                    if(!empty($avatar_proprio)){
                ?>
                <img src="images/<?= $avatar_proprio; ?>" width="150" />
                <?php     
                    }
                ?>
                <br/>
                <br/>
                <p> Nom d'utilisateur : <?= $pseudo_proprio ?></p> <br/>
                <p> A propos de moi : <?= $Apropo_proprio ?> </p> <br/>
                <a href="indexRubriques.php" style="text-decoration:none;font-family:araial_decoration:none;font-family:araial;color:blue">retour aux rubriques </a> <br/>
                <?php if(isset($smg) AND !empty($msg)){ echo $msg;} ?>
            </header>
        </body>
    </html>

<?php 
     }else {
        header('location:Connexion.php?error= Vous devez vous connecter' );
        }
?>