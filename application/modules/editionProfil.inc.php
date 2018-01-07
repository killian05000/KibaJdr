<?php
session_start();
try{
$connect = new PDO('mysql:host=mysql-tomtom.alwaysdata.net;dbname=tomtom_kiba;charset=utf8','tomtom','doucefrance1239');
}catch (Exception $e){die('Erreur : '.$e->getMessage());}
if(isset($_SESSION['id'])){
    
    $requser = $connect->prepare("SELECT * FROM users WHERE id = ? ");
    $requser->execute(array($_SESSION['id']));
    $user = $requser ->fetch();
    
    
    
    
    if(isset($_POST['newPseudo']) AND !empty($_POST['newPseudo']) AND $_POST['newPseudo'] != $user['pseudo']){
    
        if (strlen($_POST['newPseudo']) < 35 AND strlen($_POST['newPseudo']) > 3 ){
            
            $newPseudo = htmlspecialchars($_POST['newPseudo']);
            $insertPseudo = $connect->prepare("UPDATE users SET pseudo = ? WHERE id = ?");
            $insertPseudo->execute(array($newPseudo, $_SESSION['id']));
            header('location:profil.php?id='.$_SESSION['id']);
        
        }else{
          $msgPseudo = "le pseudo doit contenir entre 3 et 35 caracteres "  ; 
        }
    }
    
    
    if(isset($_POST['newEmail']) AND !empty($_POST['newEmail']) AND $_POST['newEmail'] != $user['email']){
       
        $secure = $connect->prepare( "SELECT * FROM users WHERE email = ? ");
        $secure->execute(array($_POST['newEmail']));
        $nb = $secure->rowcount($secure);
        
        if($nb == 0){
            
            $newEmail = htmlspecialchars($_POST['newEmail']);
            $insertEmail = $connect->prepare("UPDATE users SET email = ? WHERE id = ?");
            $insertEmail->execute(array($newEmail, $_SESSION['id']));
            header('location:profil.php?id='.$_SESSION['id']);
            
        }else{
            $msgMail = "Cette Adresse mail est indisponible";
        }
            
           
    }
    
     
      if(isset($_POST['newPassword']) AND !empty($_POST['newPassword']) AND isset($_POST['newc_password']) AND !empty($_POST['newc_password'])){
        
        if (strlen($_POST['newPassword']) < 30 AND strlen($_POST['newPassword']) > 8 ){
            
            $mdp = htmlspecialchars($_POST['newPassword']);
            $c_mdp = htmlspecialchars($_POST['newc_password']);
          
            if ($mdp == $c_mdp){
            
                $hash_mdp = password_hash($mdp,DEFAULT_PASSWORD);
                
                $insertMdp=$connect->prepare("UPDATE users SET password = ? AND hashkey = ? WHERE id = ? ");
                $insertMdp->execute(array($hash_mdp,$hash_mdp,$_SESSION['id']));
                header('location:profil.php?id='.$_SESSION['id']);
            
            }else{
            $msgPassword = "Vos mot de passes ne correspondent pas ! " ;
            }
        
        }else{
            $msgPassword = "le mot de passe doit contenir entre 8 et 30 caracteres ";
        }
    }
    
    if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])){
        
        $tailleMax = 2097152;
        $extensionValide = array('jpg','jpeg','png','gif');
        if($_FILES['avatar']['size'] <= $tailleMax){
        
            $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'],'.'),1));
            
            if(in_array($extensionUpload,$extensionValide)){
                
                $chemin= "images/".$_SESSION['id'].".".$extensionUpload;
                $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'],$chemin);
                
                if($resultat){
                    
                    $updateAvatar = $connect->prepare('UPDATE users SET avatar = :avatar WHERE id = :id');
                    $updateAvatar->execute(array(
                        
                        'avatar' => $_SESSION['id'].".".$extensionUpload,
                        'id' => $_SESSION['id']
                        
                                                ));
                     header('location:profil.php?id='.$_SESSION['id']);

                } else {
                    
                    $msgImage = " /!\ erreur durant l'importation de votre photo";
                }
            } else {
                
                $msgImage = "votre photo doit etre au format jpg,jpeg,gif,png";
            }
        }else {
            $msgImage = "votre photo de profil ne doit pas dépassé 2mo" ;
        }
    }
    
    
    if(isset($_POST['Apropo']) AND !empty($_POST['Apropo'])){
        
         $Apropo = htmlspecialchars($_POST['Apropo']);
        
          $inser = $connect->prepare('UPDATE users SET Apropo = ? WHERE id = ?');

          $inser->execute(array($Apropo,$_SESSION['id']));
        
          header('location:profil.php?id='.$_SESSION['id']);
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Edition du profil</h2>
        <form method ="POST" action="" enctype="multipart/form-data">
        
            <input type="text" name="newPseudo" placeholder = "Pseudo" value="<?php echo $user['pseudo']; ?>" /> <br/> <br/>
            <input type="email" name="newEmail" placeholder = "Email" value="<?php echo $user['email']; ?>" /> <br/> <br/>
            <input type="password" name="newPassword" placeholder = "Mot de passe" /> <br/> <br/>
            <input type="password" name="newc_password" placeholder = "Confirmer le mot de passe " /> <br/> <br/>
            <textarea name="Apropo" placeholder="à propos de vous ..."><?= $user['Apropo'] ?></textarea>  <br/>
            
            <label>Avatar :</label>
            <input type="file" name="avatar" /> <br/>
            <input type="submit" value="Mettre à jour mon profil !"/> 
            
         <?php  if(isset($msgPseudo)) {echo $msgPseudo ;} 
                if(isset($msgMail)) {echo $msgMail ;}
                if(isset($msgPassword)) {echo $msgPassword ;}
                if(isset($msgImage)) {echo $msgImage;}
        ?>
        </form>
   
    </body>
</html>

<?php } else {
    header('location:Connexion.php?error= Vous devez vous connecter' );
        } 
?>