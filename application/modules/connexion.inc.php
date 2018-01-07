<?php
//session_start();
try{
$connect = new PDO('mysql:host=localhost;dbname=jdr;charset=utf8','root','');
}catch (Exception $e){die('Erreur : '.$e->getMessage());}

if(isset($_POST['submit'])){
    if(!empty($_POST['email']) AND !empty($_POST['password'])){
        
        
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $password = sha1($password);
        
        $recovery_user = $connect ->prepare("SELECT UTI_PASS AND UTI_MAIL FROM t_utilisateurs_uti WHERE UTI_MAIL = ? AND UTI_PASS= ?  ");
        $recovery_user->execute(array($emai,$passwordl));
        $nb = $recovery_user->rowcount();
       
        if($nb == 1){
            
                
                    $info_user = $recovery_user->fetch();
                    $_SESSION['id'] = $info_user['UTI_ID'];
                    $_SESSION['login'] = $info_user['UTI_LOGIN'];
                    $_SESSION['mail'] = $info_user['UTI_MAIL'];
                    $_SESSION['password'] = $info_user['UTI_PASS'];
                    /*
                    $_SESSION['confirme'] = $info_user['confirme'];

                    
                    if($_SESSION['confirme'] == 1){

                        

                    } else {

                       echo " veuillez confirmer par email pour pouvoir acceder au profil";
                    }
                    */

            } else {
                    
                echo "Adresse ou Mot de passe incorrect ! ";
            }
            
        
        } else {
                echo "Adresse ou Mot de passe incorrect ! ";
        }
        
   
    } else { 
        echo " Veuillez remplir les champs !";
    }
    
    
?>