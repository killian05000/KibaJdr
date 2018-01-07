{extends file="../layout.tpl"}

{block name = "content"}


    <html>
        <head>
            <title> Inscription</title>
        </head>
    <header>
    </header>
    <body>
    <form id="inscription_form" action="inscription.inc.php" method="post" >
        <table id="taaable">
            <tr>
                <td>
                    <label for="id">Choisissez votre identifiant : </label>
                </td>
                <td>
                    <input type="text" name="pseudo" id="champ_case" placeholder="Pseudo"> 
                </td>
            </tr>
            <tr>
                <td>
                    <label for="id">Choisissez votre adresse mail : </label>
                </td>
                <td>
                    <input type="email" name="email" id="champ_case" placeholder="Email"> 
                </td>
            </tr>
            <tr>
                <td>
                    <label for="id">Choisissez votre nom : </label>
                </td>
                <td>
                    <input type="email" name="email" id="champ_case" placeholder="Email"> 
                </td>
            </tr>
            <tr>
                <td>
                    <label for="id">Choisissez votre prenom: </label>
                </td>
                <td>
                    <input type="email" name="email" id="champ_case" placeholder="Email"> 
                </td>
            </tr>
            <tr>
                <td>
                    <label for="id">Choisissez votre mot de passe : </label>
                </td>
                <td>
                    <input type="password" name="password" id="champ_case" placeholder="mot de passe "> 
                </td>
            </tr>
            <tr>
                <td>
                    <label for="id">Confirmer votre mot de passe : </label>
                </td>
                <td>
                    <input type="password" name="c_password" id="champ_case" placeholder=" confirmer mot de passe "> 
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
                <input id="champ_case" type="submit" name="submit" value="S'inscrire">
            </td>
            </tr>
       </table>
        
        </form>
  </body>
</html>

{/block};