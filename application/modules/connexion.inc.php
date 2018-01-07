<!DOCTYPE html>
 <html>
        <head>
            <title> Connexion</title>
        </head>
    <header>
    </header>
    <body>
    <form action="traitement_connexion.php" method="post" >
        <table>
            <tr>
                <td>
                    <label for="id">Adresse mail : </label>
                </td>
                <td>
                    <input type="email" name="email" id="em" placeholder="Email"> 
                </td>
            </tr>
            <tr>
                <td>
                    <label for="id">Mot de passe : </label>
                </td>
                <td>
                    <input type="password" name="password" id="md" placeholder="mot de passe "> 
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td>
                </td>
            </tr>
            <tr>
            <td>
            </td>
            <td>
                <input type="submit" name="submit" value="Se connecter">
            </td>
            </tr>
       </table>  
        <?php if (isset($_GET['error'])){echo $_GET['error'];} ?>
        </form>
  </body>
</html>