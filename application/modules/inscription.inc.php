<?php

//session_start();
try{
$connect = new PDO('mysql:host=localhost;dbname=jdr;charset=utf8','root','');
}catch (Exception $e){die('Erreur : '.$e->getMessage());}
if (isset($_POST['submit'])){
    if (isset($_POST['pseudo'],$_POST['email'] ,$_POST['prenom'] ,$_POST['nom'],$_POST['password'],$_POST['c_password'])){
        if(!empty($_POST['pseudo']) AND !empty($_POST['email']) AND !empty($_POST['prenom']) AND !empty($_POST['nom']) AND !empty($_POST['password'])AND !empty($_POST['c_password'])){
            
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $nom = htmlspecialchars($_POST['nom']);
            $email= htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            $c_password = htmlspecialchars($_POST['c_password']);
            
            
        
            $secure = $connect->prepare( "SELECT * FROM t_utilisateur_uti WHERE UTI_MAIL = ?");
            $secure->execute(array($email));
            $nb = $secure->rowcount($secure);
            
            if(strlen($pseudo  ) >= 4  AND strlen($pseudo) <35 ){
                if($password == $c_password){
                    if(strlen ($password) >= 6 AND strlen($password) < 30) { 
                         if ($nb == 0 ) {
                                
                             
                            

                            $password =  sha1($password);
                            $insert = $connect->prepare("INSERT INTO t_utilisateur_uti(UTI_LOGIN,UTI_NOM,UTI_PRENOM,UTI_MAIL,UTI_PASS) VALUES(?,?,?,?,?)");
                            $insert ->execute(array($pseudo,$nom,$prenom,$email,$password));  

                         
                            /*
                            $header="MIME-Version: 1.0\r\n";
                            $header.='Content-Type:text/html; charset= utf-8"'."\n";
                            $header.='Content-Transfer-Encoding: 8bit';
                            $message=' <html> <a href="http://tomtom.alwaysdata.net/php/projet/confirmationMail.php?pseudo='.urlencode($pseudo).'">Confirmer votre compte</a>  </html> ';

                            mail($email,"Confirmation de votre compte",$message);
                             
                            echo "un email de confirmation vous a été déposé a votre adresse mail afin de confirmer votre compte "; 
                            */
                             
                        }else { 
                             
                                $recovery_user = $connect ->prepare("SELECT UTI_PASS AND UTI_MAIL FROM t_utilisateurs_uti WHERE UTI_MAIL = ? AND UTI_PASS= ?  ");
                                $recovery_user->execute(array($emai,$passwordl));
                                $nb = $recovery_user->rowcount();

                                if($nb == 1){


                                    $info_user = $recovery_user->fetch();
                                    $_SESSION['id'] = $info_user['UTI_ID'];
                                    $_SESSION['login'] = $info_user['UTI_LOGIN'];
                                    $_SESSION['mail'] = $info_user['UTI_MAIL'];
                                    $_SESSION['password'] = $info_user['UTI_PASS'];
                                   // $_SESSION['confirme'] = $info_user['confirme'];
                                    
                                } else {
                                   echo " Adresse mail indisponible ! "; 
                                }

                            }

                    }else {
                  echo " le mot de passe trop grand doit etre comrpis entre 6 et 30 caracteres";
                    }
                    
                }else {
                    echo "vos mots de passe ne correspondent pas";
                }

            }else {
              echo " votre pseudo doit etre compris entre 4 et 35 caracteres ";
            }

        }else {
            echo " Veuillez remplir les champs";
        }
    }
}
?>