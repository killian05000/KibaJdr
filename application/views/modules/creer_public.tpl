{extends file="../layout.tpl"}

{block name = "content"}

<form  method ="POST"  enctype="multipart/form-data">
    <table id = "table_profil">
        <tr>
            <td>
                Titre :
            </td>
            <td>
                <input class="champ_case informations_editprofil" type = "text" name = "titre" placeholder="titre"  value="{$data['INFORMATIONS']['TITRE']}"/>
            </td>
        </tr>

        <tr>
            <td>
                Duree :
            </td>
            <td>
                <input class="champ_case informations_editprofil" type = "text" name = "duree" placeholder="duree"  value="{$data['INFORMATIONS']['DUREE']}"/>
            </td>
        </tr>

        <tr>
            <td>
                Difficulté :
            </td>
            <td>
                <input class="champ_case informations_editprofil" type = "text" name = "difficulte" placeholder="difficulte"  value="{$data['INFORMATIONS']['DIFFICULTE']}"/>
            </td>
        </tr>
        
        <tr>
            <td>
                Nombre de personnes :
            </td>
            <td>
                <input class="champ_case informations_editprofil" type = "text" name = "nbpersonne" placeholder="nbpersonne"  value="{$data['INFORMATIONS']['NBPERSONNE']}"/>
            </td>
        </tr>

        <tr>
            <td>        
                Description :
            </td>
            <td>
                <textarea class="champ_case informations_editprofil" name="contenu" placeholder="Contenu de la Rubrique">{$data['INFORMATIONS']['DESCRIPTION']}</textarea>
            </td>
        </tr>

        <tr>
            <td>        
                Vignette :
            </td>
            <td>
                <input class="champ_case informations_editprofil" type = "file" name="vignette">
            </td>
        </tr>

        <tr>
            <td>
            </td>
            <td>
                <input class="champ_case informations_editprofil" type = "submit" value ="Envoyer l'article" /> 
            </td>
        </tr>
    </table>
</form>



{/block};