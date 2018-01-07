<?php

try{
$connect = new PDO('mysql:host=mysql-tomtom.alwaysdata.net;dbname=tomtom_kiba;charset=utf8','tomtom','doucefrance1239');
}catch (Exception $e){die('Erreur : '.$e->getMessage());}

    

    if(isset($_GET['pseudo'], $_GET['key']) AND !empty($_GET['pseudo']) AND !empty($_GET['key'])){
        
        $pseudo = htmlspecialchars(urldecode($_GET['pseudo']));
        $key = ($_GET['key']);
        $requeteUser = $connect->prepare("SELECT * FROM users WHERE pseudo = ? AND confirme_key = ?");
        $requeteUser->execute(array($pseudo,$key));
        $userExist = $requeteUser->rowcount();
         
        if($userExist == 1){
            
            $user = $requeteUser->fetch();
            if($user['confirme'] == 0){
                
                $updateUser = $connect->prepare("UPDATE users SET confirme = 1 WHERE pseudo = ? AND confirme_key = ?");
                $updateUser->execute(array($pseudo,$key));
                
                echo " votre compte a bien ete confirme :) " ;
                
                
                
            } else {
                
                echo "Votre compte a deja ete confirmé";
            }
        
        } else {
            
            echo "l'utilisateur n'existe pas !";
        }
        
    } else {
        echo "erreur connexion bdd";
    }
?>