<?php
//session_start();
try{
$connect = new PDO ('mysql:host=localhost;dbname=jdr;charset=utf8','root','');
}catch (Exception $e){die('Erreur : '.$e->getMessage());}

if(isset($_SESSION['id'])){

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