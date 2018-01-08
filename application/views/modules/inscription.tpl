{extends file="../layout.tpl"}

{block name = "content"}

<html>
    <head>
        <title> Inscription</title>
    </head>
    <header>
    </header>
    <body>
    <form id="inscription_form" action="" method="post" >
        <table id="taaable">
            <tr>
                <td>
                    <label for="id">Choisissez votre identifiant : </label>
                </td>
                <td>
                    <input type="text" name="pseudo" class="champ_case" placeholder="Pseudo"> 
                </td>
            </tr>
            <tr>
                <td>
                    <label for="id">Choisissez votre adresse mail : </label>
                </td>
                <td>
                    <input type="email" name="email" class="champ_case" placeholder="Email"> 
                </td>
            </tr>
            <tr>
                <td>
                    <label for="id">Choisissez votre nom : </label>
                </td>
                <td>
                    <input type="text" name="nom" class="champ_case" placeholder="Nom"> 
                </td>
            </tr>
            <tr>
                <td>
                    <label for="id">Choisissez votre prenom: </label>
                </td>
                <td>
                    <input type="text" name="prenom" class="champ_case" placeholder="Prenom"> 
                </td>
            </tr>
            <tr>
                <td>
                    <label for="id">Choisissez votre mot de passe : </label>
                </td>
                <td>
                    <input type="password" name="password" class="champ_case" placeholder="Mot de passe "> 
                </td>
            </tr>
            <tr>
                <td>
                    <label for="id">Confirmer votre mot de passe : </label>
                </td>
                <td>
                    <input type="password" name="c_password" class="champ_case" placeholder=" Confirmer mot de passe "> 
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
            <tr>
            </tr>
            </tr>
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