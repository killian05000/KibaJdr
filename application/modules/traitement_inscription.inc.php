<?php

session_start();
try{
$connect = new PDO('mysql:host=mysql-tomtom.alwaysdata.net;dbname=tomtom_kiba;charset=utf8','tomtom','doucefrance1239');
}catch (Exception $e){die('Erreur : '.$e->getMessage());}
if (isset($_POST['submit'])){
    if (isset($_POST['pseudo'],$_POST['email'],$_POST['password'],$_POST['c_password'])){
        if(!empty($_POST['pseudo']) AND !empty($_POST['email']) AND !empty($_POST['password'])AND !empty($_POST['c_password'])){
            
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $email= htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            $c_password = htmlspecialchars($_POST['c_password']);
            
        
          
             
           
            
            
            
            $secure = $connect->prepare( "SELECT * FROM users WHERE email = ?");
            $secure->execute(array($email));
            $nb = $secure->rowcount($secure);
            
            if(strlen($pseudo  ) > 3  AND strlen($pseudo) <35 ){
                if($password == $c_password){
                    if(strlen ($password) > 8 AND strlen($password) < 30) { 
                         if ($nb == 0 ) {
                                
                            /*$longueurKey = 12;
                            $key="";
                            for($i=1;$i<$longueurKey;++$i){
                                $key .= mt_rand(0,9);
                            }
                            */
                             
                             
                            

                            $password =  password_hash($password,PASSWORD_DEFAULT);
                            $hashkey = $password;
                            $insert = $connect->prepare("INSERT INTO users(pseudo,email,password,confirme_key,hashkey) VALUES(?,?,?,?,?)");
                            $insert ->execute(array($pseudo,$email,$password,$key,$hashkey));  

                         

                            $header="MIME-Version: 1.0\r\n";
                            $header.='Content-Type:text/html; charset= utf-8"'."\n";
                            $header.='Content-Transfer-Encoding: 8bit';
                            $message=' <html> <a href="http://tomtom.alwaysdata.net/php/projet/confirmationMail.php?pseudo='.urlencode($pseudo).'&key='.$key.'">Confirmer votre compte</a>  </html> ';

                            mail($email,"Confirmation de votre compte",$message);
                             
                            echo "un email de confirmation vous a été déposé a votre adresse mail afin de confirmer votre compte "; 

                        }else { 

                            $verif_inscription = $connect->prepare("SELECT password FROM users WHERE email= ? ");
                            $verif_inscription->execute(array($email));
                            $info_password = $verif_inscription ->fetch();
                            $nb2 = $verif_inscription->rowcount();

                            if($nb2 == 1){

                                if(password_verify($password,$info_password['password'])){

                                $verif_inscription = $connect->prepare("SELECT * FROM users WHERE email= ? ");
                                $verif_inscription->execute(array($email));

                                $info_user = $verif_inscription ->fetch();
                                $_SESSION['id'] = $info_user['id'];
                                $_SESSION['pseudo'] = $info_user['pseudo'];
                                $_SESSION['email'] = $info_user['email'];
                                $_SESSION['password'] = $info_user['password'];
                                header('location:profil.php'); 

                                } else {
                                    header('location:inscription.php?error= Adresse mail indisponible ! '); 
                                }

                            } else {
                                header('location:inscription.php?error= Adresse mail indisponible ! '); 
                            }
                              
                        }  

                    }else {
                    header('location:inscription.php?error= lemot de passe trop grand doit etre comrpis entre 8 et 30 caracteres)');
                    }
                    
                }else {
                    header('location:inscription.php?error= vos mots de passe ne correspondent pas');
                }

            }else {
                header('location:inscription.php?error= votre pseudo doit etre compris entre 3 et 35 caracteres ');
            }

        }else {
            header('location:inscription.php?error=Veuillez remplir les champs');
        }
    }
}
?>