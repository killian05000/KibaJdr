{extends file="../layout.tpl"}

{block name = "content"}


<head>
    <title> Connexion</title>
</head>
<header>
</header>
<body>
<form action="" method="post" >
    <table id="taaable">
        <tr>
            <td>
                <label for="id">Adresse mail : </label>
            </td>
            <td>
                <input type="email" name="email" class="champ_case" placeholder="Email"> 
            </td>
        </tr>
        <tr>
            <td>
                <label for="id">Mot de passe : </label>
            </td>
            <td>
                <input type="password" name="password" class="champ_case" placeholder="mot de passe "> 
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
            <input class="champ_case" type="submit" name="submit" value="Se connecter">
        </td>
        </tr>
   </table>  
    </form>
</body>


{/block};