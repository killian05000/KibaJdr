<!DOCTYPE >
    <html>
        <head>
            <title> Inscription</title>
        </head>
    <header>
    </header>
    <body>
    <form action="traitement_inscription.php" method="post" >
        <table>
            <tr>
                <td>
                    <label for="id">Choisissez votre identifiant : </label>
                </td>
                <td>
                    <input type="text" name="pseudo" id="id" placeholder="Pseudo"> 
                </td>
            </tr>
            <tr>
                <td>
                    <label for="id">Choisissez votre adresse mail : </label>
                </td>
                <td>
                    <input type="email" name="email" id="em" placeholder="Email"> 
                </td>
            </tr>
            <tr>
                <td>
                    <label for="id">Choisissez votre mot de passe : </label>
                </td>
                <td>
                    <input type="password" name="password" id="md" placeholder="mot de passe "> 
                </td>
            </tr>
            <tr>
                <td>
                    <label for="id">Confirmer votre mot de passe : </label>
                </td>
                <td>
                    <input type="password" name="c_password" id="cmd" placeholder=" confirmer mot de passe "> 
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
                <input type="submit" name="submit" value="S'inscrire">
            </td>
            </tr>
       </table>
        <?php if (isset($_GET['error'])){echo $_GET['error'];} ?>
        </form>
  </body>
</html>