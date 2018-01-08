<?php
//session_start();
try{
$connect = new PDO('mysql:host=localhost;dbname=jdr;charset=utf8','root','');
}catch (Exception $e){die('Erreur : '.$e->getMessage());}
if(isset($_SESSION['id'])){
    
    $requser = $connect->prepare("SELECT * FROM t_utilisateur_uti WHERE UTI_PASS = ? ");
    $requser->execute(array($_SESSION['id']));
    $user = $requser ->fetch();
    
    
    
    
    if(isset($_POST['newPseudo']) AND !empty($_POST['newPseudo']) AND $_POST['newPseudo'] != $user['UTI_LOGIN']){
    
        if (strlen($_POST['newPseudo']) < 35 AND strlen($_POST['newPseudo']) >= 4 ){
            
            $newPseudo = htmlspecialchars($_POST['newPseudo']);
            $insertPseudo = $connect->prepare("UPDATE t_utilisateur_uti SET UTI_LOGIN = ? WHERE UTI_ID = ?");
            $insertPseudo->execute(array($newPseudo, $_SESSION['id']));
            
            echo "votre pseudo a été changé";
        
        }else{
          $msgPseudo = "le pseudo doit contenir entre 4 et 35 caracteres "  ; 
        }
    }
    
    
    if(isset($_POST['newEmail']) AND !empty($_POST['newEmail']) AND $_POST['newEmail'] != $user['UTI_MAIL']){
       
        $secure = $connect->prepare( "SELECT * FROM t_utilisateur_uti WHERE UTI_MAIL = ? ");
        $secure->execute(array($_POST['newEmail']));
        $nb = $secure->rowcount($secure);
        
        if($nb == 0){
            
            $newEmail = htmlspecialchars($_POST['newEmail']);
            $insertEmail = $connect->prepare("UPDATE t_utilisateur_uti SET UTI_MAIL = ? WHERE UTI_iD = ?");
            $insertEmail->execute(array($newEmail, $_SESSION['id']));
            
            echo "votre mail a été changé";
            
        }else{
            $msgMail = "Cette Adresse mail est indisponible";
        }
            
           
    }
    
     
      if(isset($_POST['newPassword']) AND !empty($_POST['newPassword']) AND isset($_POST['newc_password']) AND !empty($_POST['newc_password'])){
        
        if (strlen($_POST['newPassword']) < 30 AND strlen($_POST['newPassword']) >= 6 ){
            
            $mdp = htmlspecialchars($_POST['newPassword']);
            $c_mdp = htmlspecialchars($_POST['newc_password']);
          
            if ($mdp == $c_mdp){
            
                $newPassword = sha1($mdp);
                
                $insertMdp=$connect->prepare("UPDATE t_utilisateur_uti SET UTI_PASS = ? WHERE UTI_ID = ? ");
                $insertMdp->execute(array($newPassword,$_SESSION['id']));
                
                echo "votre mot de passe  a été changé";
                
                //header('location:profil.php?id='.$_SESSION['id']);
            
            }else{
             echo "Vos mot de passes ne correspondent pas ! " ;
            }
        
        }else{
          echo "le mot de passe doit contenir entre 8 et 30 caracteres ";
        }
    }
    
    if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])){
        
        $tailleMax = 2097152;
        $extensionValide = array('jpg','jpeg','png','gif');
        if($_FILES['avatar']['size'] <= $tailleMax){
        
            $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'],'.'),1));
            
            if(in_array($extensionUpload,$extensionValide)){
                
                $chemin= "asset/images/".$_SESSION['id'].".".$extensionUpload;
                $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'],$chemin);
                
                if($resultat){
                    
                    $updateAvatar = $connect->prepare('UPDATE t_utilisateur_uti SET UTI_AVATAR = :avatar WHERE UTI_ID = :id');
                    $updateAvatar->execute(array(
                        
                        'avatar' => $_SESSION['id'].".".$extensionUpload,
                        'id' => $_SESSION['id']
                        
                                                ));
                    
                     echo ", votre image a été changé";

                } else {
                    
                  echo " /!\ erreur durant l'importation de votre photo";
                }
            } else {
                
                echo "votre photo doit etre au format jpg,jpeg,gif,png";
            }
        }else {
            echo "votre photo de profil ne doit pas dépassé 2mo" ;
        }
    }
    
    
    $requser = $connect->prepare( "SELECT * FROM t_utilisateur_uti WHERE UTI_ID = ? ");
    $requser->execute(array($_SESSION['id']));
    $u = $requser->fetch();
    
    $user['ID'] = $u['UTI_ID'];
    $user['PSEUDO'] = $u['UTI_LOGIN'];
    $user['MAIL'] = $u['UTI_MAIL'];
    $user['NOM'] = $u['UTI_NOM'];
    $user['PRENOM'] = $u['UTI_PRENOM'];
    $user['PASSWORD'] = $u['UTI_PASS'];
    $user['ADMIN'] = $u['UTI_ADMIN'];
    $user['AVATAR'] = $u['UTI_AVATAR'];

    $data['INFORMATIONS'] = $user;
    
    
    }
?>

