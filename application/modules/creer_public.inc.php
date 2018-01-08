<?php


$connect = new PDO('mysql:host=localhost;dbname=jdr;charset=utf8','root','');

if(isset($_SESSION['id'] )){
    
    $requser = $connect->prepare("SELECT * FROM t_utilisateur_uti WHERE UTI_ID = ? ");
    $requser->execute(array($_SESSION['id']));
    $user = $requser ->fetch();
    
    $user_id = $_SESSION['id'];
    
    $edition = 0;
    
    
    
    if(isset($_GET['edit']) AND !empty ($_GET['edit'])){        
        
        $edition = 1;
        
        $edit_id = htmlspecialchars($_GET['edit']);
        
        $verif_reference = $connect->prepare('SELECT * FROM t_publication_pub WHERE PUB_ID = ? AND UTI_ID = ?');
        $verif_reference->execute(array($edit_id,$user_id));
        $verif_existe = $verif_reference->rowcount($verif_reference);        
        
        if($verif_existe == 1){            

            $edit_rubriques = $connect->prepare('SELECT * FROM t_publication_pub WHERE PUB_ID = ? AND UTI_ID = ?');
            $edit_rubriques->execute(array($edit_id,$user_id));


            $edit_rubriques = $edit_rubriques->fetch();
            $edit_id = $edit_rubriques['PUB_ID'];
            $edit_titre = $edit_rubriques['PUB_TITRE'];
            $edit_contenu = $edit_rubriques['PUB_DESCRIPTION'];
            $edit_duree = $edit['PUB_DUREE'];
            $edit_difficulte = $edit['PUB_DIFFICULTE'];
            //$edit_statut = $edit['STATUT'];
            $edit_nbpersonne = $edit['PUB_NBPERSONNE'];

            $e = $edit_rubriques->fetch();
            $edit['ID'] = $e['PUB_ID'];
            $edit['TITRE'] = $e['PUB_TITRE'];
            $edit['DESCRIPTION'] = $e['PUB_DESCRIPTION'];
            $edit['DUREE'] = $e['PUB_DUREE'];
            $edit['DIFFICULTE'] = $e['PUB_DIFFICULTE'];
            //$edit_statut = $edit['STATUT'];
            $edit['NBPERSONNE'] = $e['PUB_NBPERSONNE'];

            $data['INFORMATIONS'][] = $edit;
               

        } else {            
            echo  "erreur impossible d'editer, la rubrique ne vous appartient pas" ;           
        }

    } 
    if(isset($_POST['titre'],$_POST['contenu'],$_POST['duree'],$_POST['difficulte'],$_POST['nbpersonne'])){

        if(!empty($_POST['titre']) AND !empty($_POST['contenu'])AND !empty($_POST['duree'])AND !empty($_POST['difficulte'])AND !empty($_POST['nbpersonne'])){

            $titre = htmlspecialchars($_POST['titre']);
            $contenu = htmlspecialchars($_POST['contenu']);
            $duree = htmlspecialchars($_POST['duree']);
            $difficulte = htmlspecialchars($_POST['difficulte']);
            $nbpersonne = htmlspecialchars($_POST['nbpersonne']);
            
            if($edition == 0){               
            
                   $inser = $connect->prepare('INSERT INTO t_publication_pub(PUB_TITRE,PUB_DESCRIPTION,PUB_DATE,UTI_ID,PUB_STATUT,PUB_DUREE,PUB_DIFFICULTE,PUB_NBPERSONNE) VALUES (?,?,NOW(),?,?,?,?)');

                    $inser->execute(array($titre,$contenu,$user_id,$statut,$duree,$difficulte,$nbpersonne));
                
                

                    
             
               
                  
            } else {

                $update = $connect->prepare('UPDATE rubriques SET titre_rubriques = ? , contenu_rubriques = ? , date_time_edit_rubriques = NOW() WHERE id_rubriques = ? AND reference_id = ?');

                $update->execute(array($titre,$contenu,$user_id,$statut,$duree,$difficulte,$nbpersonne));
                echo " c'est dans la boite :D " ;
               
                



            }
            
             if(isset($_FILES['vignette']) AND !empty($_FILES['vignette']['name'])){
                    
                
                            $extensionValide = array('jpg','jpeg','png','gif');

                            $chemin = '/asset/images/'.$lastid.$extensionValide;
                            move_uploaded_file($_FILES['vignette']['tmp_name'], $chemin);

                            echo " c'est dans la boite :) ";
                            
                        } else {
                            
                           echo 'votre image n\'est pas au bon format :/ ';

                        }

                        
                    
        } else {

            echo ' Veuillez remplir tous les champs' ;
        }
    }
}
else{
   header('location:?page=accueil'); 
}
  ?>         