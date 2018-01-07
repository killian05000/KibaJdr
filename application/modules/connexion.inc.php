<?php
try{
$connect = new PDO('mysql:host=localhost;dbname=jdr;charset=utf8','root','');
}catch (Exception $e){die('Erreur : '.$e->getMessage());}

if(isset($_POST['submit'])){
    if(!empty($_POST['email']) AND !empty($_POST['password'])){
        
        
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        
        
        $recovery_password = $connect ->prepare("SELECT UTI_PASS FROM t_utilisateurs_uti WHERE UTI_MAIL = ?  ");
        $recovery_password->execute(array($email));
        $info_password = $recovery_password ->fetch();
        $nb = $recovery_password->rowcount();
       
        if($nb == 1){
            
            if(password_verify($password,$info_password['UTI_PASS'])){
                
                    $recovery_user = $connect ->prepare("SELECT * FROM t_utilisateurs_uti WHERE UTI_MAIL = ?");
                    $recovery_user->execute(array($email));
                
                    $info_user = $recovery_user->fetch();
                    $_SESSION['id'] = $info_user['UTI_ID'];
                    $_SESSION['login'] = $info_user['UTI_LOGIN'];
                    $_SESSION['mail'] = $info_user['UTI_MAIL'];
                    $_SESSION['password'] = $info_user['UTI_PASS'];
                    $_SESSION['confirme'] = $info_user['confirme'];

                    if($_SESSION['confirme'] == 1){

                         header('location:profil.inc.php');

                    } else {

                       echo " veuillez confirmer par email pour pouvoir acceder au profil";
                    }

            } else {
                    
                header('location:connexion.inc.php?error=Adresse ou Mot de passe incorrect ! ');
            }
            
        
        } else {
                header('location:connexion.inc.php?error=Adresse ou Mot de passe incorrect ! ');
        }
        
   
    } else { 
        header('location:connexion.inc.php?error=Veuillez remplir les champs !');
    }
    
    
} 
?>