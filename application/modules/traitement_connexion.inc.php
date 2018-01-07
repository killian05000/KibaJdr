<?php
session_start();
try{
$connect = new PDO('mysql:host=mysql-tomtom.alwaysdata.net;dbname=tomtom_kiba;charset=utf8','tomtom','doucefrance1239');
}catch (Exception $e){die('Erreur : '.$e->getMessage());}

if(isset($_POST['submit'])){
    if(!empty($_POST['email']) AND !empty($_POST['password'])){

        
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        
        
        $recovery_password = $connect ->prepare("SELECT password FROM users WHERE email = ?  ");
        $recovery_password->execute(array($email));
        $info_password = $recovery_password ->fetch();
        $nb = $recovery_password->rowcount();
       
        if($nb == 1){
            
            if(password_verify($password,$info_password['password'])){
                
                    $recovery_user = $connect ->prepare("SELECT * FROM users WHERE email = ?");
                    $recovery_user->execute(array($email));
                
                    $info_user = $recovery_user->fetch();
                    $_SESSION['id'] = $info_user['id'];
                    $_SESSION['pseudo'] = $info_user['pseudo'];
                    $_SESSION['email'] = $info_user['email'];
                    $_SESSION['password'] = $info_user['password'];
                    $_SESSION['confirme'] = $info_user['confirme'];

                    if($_SESSION['confirme'] == 1){

                         header('location:profil.php');

                    } else {

                       echo " veuillez confirmer par email pour pouvoir acceder au profil";
                    }

            } else {
                    
                header('location:Connexion.php?error=Adresse ou Mot de passe incorrect ! ');
            }
            
        } else {
                header('location:Connexion.php?error=Adresse ou Mot de passe incorrect ! ');
        }
        
   
    } else { 
        header('location:Connexion.php?error=Veuillez remplir les champs !');
    }
    
} else {
    header('location:Connexion.php?error=Formulaire non envoyé !');
}
?>