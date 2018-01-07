<?php
session_start();
$connect = new PDO('mysql:host=mysql-tomtom.alwaysdata.net;dbname=tomtom_kiba;charset=utf8','tomtom','doucefrance1239');

if(isset($_SESSION['id'] )){
    
    $edition_commentaire = 0;
    
    $requser = $connect->prepare("SELECT * FROM users WHERE id = ? ");
    $requser->execute(array($_SESSION['id']));
    
    $user = $requser ->fetch();
    
    $id_user = $user['id'];
    $pseudo_user = $user['pseudo'];
    $avatar_user = $user['avatar'];
    
    if(isset($_GET['id_rubriques']) AND !empty($_GET['id_rubriques'])){

        $get_id_rubriques= htmlspecialchars($_GET['id_rubriques']);
        $rubriques = $connect->prepare('SELECT * FROM rubriques WHERE id_rubriques= ?');
        $rubriques->execute(array($get_id_rubriques));
        

        if($rubriques->rowcount() == 1){


            $rubriques = $rubriques->fetch();
            
            $id_rubriques = $rubriques['id_rubriques'];
            $titre_rubriques = $rubriques['titre_rubriques'];
            $contenu_rubriques = $rubriques['contenu_rubriques'];

            $rubrique_proprietaire = $rubriques['reference_id'];

            $recup_proprio = $connect->prepare('SELECT * FROM users WHERE id = ?');
            $recup_proprio->execute(array($rubrique_proprietaire));

            if($recup_proprio->rowcount() == 1){

                $recup_proprio = $recup_proprio->fetch();
                $id_proprio = $recup_proprio['id'];
                $pseudo_proprio = $recup_proprio['pseudo'];
                $avatar_proprio = $recup_proprio['avatar'];


            } else {

                $msg = "une erreur est survenue  , peut etre que le créateur n'existe plus :( " ;
            }

        } else {

            $msg = 'Cette Rubrique n\'existe pas' ;
        }


    } else {

        $msg = "un probleme est survenu :( " ;
    }


    
   
    
    if(isset($_GET['comedit']) AND !empty($_GET['comedit'])){
        
        $id_comedit = htmlspecialchars($_GET['comedit']);
        
        $appartenance_commentaire = $connect->prepare("SELECT * FROM commentaires WHERE id_commentaires = ? AND reference_users = ?");
        $appartenance_commentaire->execute(array($id_comedit,$id_user));
        $nb = $appartenance_commentaire->rowcount();
        
        if($nb == 1){
            
            $appartenance_commentaire = $connect->prepare("SELECT * FROM commentaires WHERE id_commentaires = ? AND reference_users = ?");
            $appartenance_commentaire->execute(array($id_comedit,$id_user));
            $edit_commentaire = $appartenance_commentaire->fetch();
            
            $edit_contenu = $edit_commentaire['contenu_commentaires'];
            
            $edition_commentaire = 1;
            
            
            
        }
        
        
    }
    
    

    if (isset($_POST['submit_commentaire'])){
        if (isset($_POST['commentaire']) AND !empty($_POST['commentaire'])) {

            $commentaire = htmlspecialchars($_POST['commentaire']);
            
        if ($edition_commentaire == 0){
            
            $inser = $connect->prepare('INSERT INTO commentaires(contenu_commentaires,reference_users,reference_rubriques,reference_pseudo) VALUES (?,?,?,?)');
            $inser->execute(array($commentaire,$id_user,$id_rubriques,$pseudo_user));
            
              header('location:Rubriques.php?id_rubriques=$id_rubriques');
            
        } else {
            
            $inseredit = $connect->prepare('UPDATE INTO commentaires SET contenu_commentaires = ? WHERE id_commentaires = ? AND reference_users = ?');
            $inseredit->execute(array($new_commentaire,$id_comedit,$id_user));
            
            header('location:Rubriques.php?id_rubriques=$id_rubriques');
        }
                                                    
           
    
                
            
          
            
            
        } else {
            $msgCommentaire = "  /!\ tout les champs doivent etre complétés" ;
        }
    }


    $liste_commentaires = $connect->prepare('SELECT * FROM commentaires WHERE reference_rubriques = ? ORDER BY id_commentaires DESC');
    $liste_commentaires->execute(array($id_rubriques));
    
?>


<!DOCTYPE>

<html>
    <head>
        <title>Accueil</title>
        <meta charset = utf-8>
    </head>
    <body>
        
        <h1><?= $titre_rubriques ?></h1>
        <p> <?= $contenu_rubriques ?> </p> <br/> <br/>
        <p> rubrique créé par : <a href="profilGlobal.php?idProprio=<?= $id_proprio ?>" ><?= $pseudo_proprio ?></a>  <?php
                    if(!empty($avatar_proprio)){
                ?>
                <img src="images/<?= $avatar_proprio; ?>" width="30" />
                <?php     
                    }
                ?> </p>
        
        <br/>
        <br/>
        
        <h2> Commentaires </h2>
        
        <form method="POST">
        
            
                <p> <?= $pseudo_user ?> 
                <?php if(!empty($avatar_user)){ ?>
                    <img src="images/<?= $avatar_user; ?>" width="30" />   
                <?php } ?>
                </p>
            
            <textarea name="commentaire" placeholder="votre commentaire..." ><?= $edit_contenu ?></textarea>
            <input type="submit" value="poster mon commentaire" name="submit_commentaire" />
            
        </form>
              
        
              
        <?php
        if(isset($msg) AND ! empty($msg)){echo $msg;} 
        if(isset($msgCommentaire) AND !empty($msgCommentaire))  {echo $msgCommentaire;}
        ?>
        
        <br/>
        
        
       <?php  while($c = $liste_commentaires->fetch()){ ?>  
        <b> <a href="profilGlobal.php?idProprio=<?= $c['reference_users'] ?>" ><?= $c['reference_pseudo'] ?></a> : </b> <?= $c['contenu_commentaires'] ?> <br/>
            | <a href="rubriques.php?comedit=<?= $c['id_commentaires'] ?>" >Modifier commentaires </a>  
            | <a href="rubriques.php?comdel=<?=$c['id_commentaires']?>">Supprimer commentaires</a>
       <?php } 
        
} else {
    header('location:Connexion.php');
}

        ?>
    </body>
</html>

