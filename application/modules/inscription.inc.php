<?php

//session_start();
try{
$connect = new PDO('mysql:host=localhost;dbname=jdr;charset=utf8','root','');
}catch (Exception $e){die('Erreur : '.$e->getMessage());}
if (isset($_POST['submit'])){
    if (isset($_POST['pseudo'],$_POST['email'],$_POST['password'],$_POST['c_password'])){
        if(!empty($_POST['pseudo']) AND !empty($_POST['email']) AND !empty($_POST['password'])AND !empty($_POST['c_password'])){
            
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $nom = htmlspecialchars($_POST['nom']);
            $email= htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            $c_password = htmlspecialchars($_POST['c_password']);
            
            
        
            $secure = $connect->prepare( "SELECT * FROM t_utilisateur_uti WHERE UTI_MAIL = ?");
            $secure->execute(array($email));
            $nb = $secure->rowcount($secure);
            
            if(strlen($pseudo  ) > 3  AND strlen($pseudo) <35 ){
                if($password == $c_password){
                    if(strlen ($password) > 8 AND strlen($password) < 30) { 
                         if ($nb == 0 ) {
                                
                             
                            

                            $password =  password_hash($password,PASSWORD_DEFAULT);
                            $hashkey = $password;
                            $insert = $connect->prepare("INSERT INTO t_utilisateur_uti(UTI_LOGIN,UTI_NOM,UTI_PRENOM,UTI_MAIL,UTI_PASS,UTI_CONFIRM,UTI_HASHKEY) VALUES(?,?,?,?,?,?,?)");
                            $insert ->execute(array($pseudo,$nom,$prenom,$email,$password,$key,$hashkey));  

                         

                            $header="MIME-Version: 1.0\r\n";
                            $header.='Content-Type:text/html; charset= utf-8"'."\n";
                            $header.='Content-Transfer-Encoding: 8bit';
                            $message=' <html> <a href="http://tomtom.alwaysdata.net/php/projet/confirmationMail.php?pseudo='.urlencode($pseudo).'&key='.$key.'">Confirmer votre compte</a>  </html> ';

                            mail($email,"Confirmation de votre compte",$message);
                             
                            echo "un email de confirmation vous a été déposé a votre adresse mail afin de confirmer votre compte "; 

                        }else { 

                            $verif_inscription = $connect->prepare("SELECT UTI_PASS FROM t_utilisateur_uti WHERE UTI_MAIL= ? ");
                            $verif_inscription->execute(array($email));
                            $info_password = $verif_inscription ->fetch();
                            $nb2 = $verif_inscription->rowcount();

                            if($nb2 == 1){

                                if(password_verify($password,$info_password['UTI_PASS'])){

                                $verif_inscription = $connect->prepare("SELECT * FROM t_utilisateurs_uti WHERE email= UTI_MAIL ");
                                $verif_inscription->execute(array($email));

                                $info_user = $verif_inscription ->fetch();
                                $_SESSION['id'] = $info_user['UTI_ID'];
                                $_SESSION['login'] = $info_user['UTI_LOGIN'];
                                $_SESSION['email'] = $info_user['UTI_MAIL'];
                                $_SESSION['password'] = $info_user['UTI_PASS'];
                                header('location:profil.inc.php'); 

                                } else {
                                    header('location:inscription.inc.php?error= Adresse mail indisponible ! '); 
                                }

                            } else {
                                header('location:inscription.inc.php?error= Adresse mail indisponible ! '); 
                            }
                              
                        }  

                    }else {
                    header('location:inscription.inc.php?error= lemot de passe trop grand doit etre comrpis entre 8 et 30 caracteres)');
                    }
                    
                }else {
                    header('location:inscription.inc.php?error= vos mots de passe ne correspondent pas');
                }

            }else {
                header('location:inscription.inc.php?error= votre pseudo doit etre compris entre 3 et 35 caracteres ');
            }

        }else {
            header('location:inscription.inc.php?error=Veuillez remplir les champs');
        }
    }
}
?>