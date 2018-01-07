
<?php

if(!empty($_FILES)){
    
    $img = $_FILES['image'];
    $ext = strtolower(substr($img['name'],-3));
    $allow_ext = array('png','jpg','gif','jpeg');
    if(in_array($ext,$allow_ext)){
        move_uploaded_file($img['tmp_name'],"images/".$img['name']);
    }else{  
        $erreur = "Image non reconnue";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Upload de fichier</title>
        <meta charset ="URF-8" />
    </head>
        <body>
            
            <?php
            if (isset($erreur)){
                echo $erreur;
            ?>
            
            }
            <form action="index.php" method="POST" enctype="multipart/form-data">
            
                <input type="file" name="image" /> <br />
                <input type="submit" value="Envoyer"/>
                
            </form>
        </body>
</html>

    



