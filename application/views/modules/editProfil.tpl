{extends file="../layout.tpl"}

{block name = "content"}

<a>cette ligne se trouve dans edit profil.tpl</a><br><br><br>


    <table id = "table_profil">
        <tr>
            <td>
                Pseudo :
            </td>
            <td>
                <a id="informations_profil">{$data['INFORMATIONS']['PSEUDO']}</a>
            </td>
        </tr>

        <tr>
            <td>
                Nom :
            </td>
            <td>
                <a id="informations_profil">{$data['INFORMATIONS']['NOM']}</a>
            </td>
        </tr>

        <tr>
            <td>
                Prenom :
            </td>
            <td>
                <a id="informations_profil">{$data['INFORMATIONS']['PRENOM']}</a>
            </td>
        </tr>
        
        <tr>
            <td>
                Adresse mail :
            </td>
            <td>
                <a id="informations_profil">{$data['INFORMATIONS']['MAIL']}</a>
            </td>
        </tr>

        <tr>
            <td>        
                Avatar :
            </td>
            <td>
                <img id="informations_profil" src = "asset/images/{$data['INFORMATIONS']['AVATAR']}" width = "300" height = "250" />
            </td>
        </tr>
    </table>

<body>       
    <form id="inscription_form" action="" method="post" enctype="multipart/form-data" >
        <table id="table_editprofil">
            <tr>
                <td>
                    <label for="id">Pseudo : </label>
                </td>
                <td>
                    <input class="champ_case informations_editprofil" type="text" name="newPseudo" placeholder = "Pseudo" value="{$data['INFORMATIONS']['PSEUDO']}" />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="id">Adresse mail : </label>
                </td>
                <td>
                    <input class="champ_case informations_editprofil" type="email" name="newEmail" placeholder = "Email" value="{$data['INFORMATIONS']['MAIL']}" />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="id">Mot de passe : </label>
                </td>
                <td>
                    <input class="champ_case informations_editprofil" type="password" name="newPassword" placeholder = "Mot de passe" />
            </tr>
            <tr>
                <td>
                    <label for="id">Confirmer mot de passe : </label>
                </td>
                <td>
                    <input class="champ_case informations_editprofil" type="password" name="newc_password" placeholder = "Confirmer le mot de passe " />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="id">Avatar : </label>
                </td>
                <td>
                    <input class="champ_case informations_editprofil" type="file" name="avatar" />
                </td>
            </tr>
<!--             <tr>
                <td>
                </td>
                <td>
                    <img class="champ_case informations_editprofil" src = "asset/images/{$data['INFORMATIONS']['AVATAR']}" width = "300" height = "250" />                
                </td>
            </tr> -->
            <tr>
                <td>
                </td>
                <td>
                    <input class="champ_case informations_editprofil" class="champ_case" type="submit" value="Mettre à jour mon profil !"/>
                </td>
            </tr>
        </table>        
    </form>
</body>

<!-- <html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Edition du profil</h2>
        <form method ="POST" action="" enctype="multipart/form-data">
        
            <input type="text" name="newPseudo" placeholder = "Pseudo" value="{$data['INFORMATIONS']['PSEUDO']}" /> <br/> <br/>
            <input type="email" name="newEmail" placeholder = "Email" value="{$data['INFORMATIONS']['MAIL']}" /> <br/> <br/>
            <input type="password" name="newPassword" placeholder = "Mot de passe" /> <br/> <br/>
            <input type="password" name="newc_password" placeholder = "Confirmer le mot de passe " /> <br/> <br/>
            
            <label>Avatar :</label>
            <input type="file" name="avatar" /> <br/>
            <input type="submit" value="Mettre à jour mon profil !"/> 
            <br/>
            <img src = "media/categorie/{$data['INFORMATIONS']['AVATAR']}" width = "400" height = "250" />
         
        </form>
   
    </body>
</html> -->

{/block};