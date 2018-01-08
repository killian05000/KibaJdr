<?php
/* Smarty version 3.1.30, created on 2018-01-08 02:30:42
  from "C:\xampp\htdocs\KibaJdr\application\views\modules\editProfil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a52c9c21f06d5_19625795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f697a9a6c341703b306429aec5911ccfbea15840' => 
    array (
      0 => 'C:\\xampp\\htdocs\\KibaJdr\\application\\views\\modules\\editProfil.tpl',
      1 => 1515375040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a52c9c21f06d5_19625795 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5207853625a52c9c21efe09_45308970', "content");
?>
;<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_5207853625a52c9c21efe09_45308970 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<a>cette ligne se trouve dans edit profil.tpl</a><br><br><br>


    <table id = "table_profil">
        <tr>
            <td>
                Pseudo :
            </td>
            <td>
                <a id="informations_profil"><?php echo $_smarty_tpl->tpl_vars['data']->value['INFORMATIONS']['PSEUDO'];?>
</a>
            </td>
        </tr>

        <tr>
            <td>
                Nom :
            </td>
            <td>
                <a id="informations_profil"><?php echo $_smarty_tpl->tpl_vars['data']->value['INFORMATIONS']['NOM'];?>
</a>
            </td>
        </tr>

        <tr>
            <td>
                Prenom :
            </td>
            <td>
                <a id="informations_profil"><?php echo $_smarty_tpl->tpl_vars['data']->value['INFORMATIONS']['PRENOM'];?>
</a>
            </td>
        </tr>
        
        <tr>
            <td>
                Adresse mail :
            </td>
            <td>
                <a id="informations_profil"><?php echo $_smarty_tpl->tpl_vars['data']->value['INFORMATIONS']['MAIL'];?>
</a>
            </td>
        </tr>

        <tr>
            <td>        
                Avatar :
            </td>
            <td>
                <img id="informations_profil" src = "asset/images/<?php echo $_smarty_tpl->tpl_vars['data']->value['INFORMATIONS']['AVATAR'];?>
" width = "300" height = "250" />
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
                    <input class="champ_case informations_editprofil" type="text" name="newPseudo" placeholder = "Pseudo" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['INFORMATIONS']['PSEUDO'];?>
" />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="id">Adresse mail : </label>
                </td>
                <td>
                    <input class="champ_case informations_editprofil" type="email" name="newEmail" placeholder = "Email" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['INFORMATIONS']['MAIL'];?>
" />
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
                    <img class="champ_case informations_editprofil" src = "asset/images/<?php echo $_smarty_tpl->tpl_vars['data']->value['INFORMATIONS']['AVATAR'];?>
" width = "300" height = "250" />                
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
        
            <input type="text" name="newPseudo" placeholder = "Pseudo" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['INFORMATIONS']['PSEUDO'];?>
" /> <br/> <br/>
            <input type="email" name="newEmail" placeholder = "Email" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['INFORMATIONS']['MAIL'];?>
" /> <br/> <br/>
            <input type="password" name="newPassword" placeholder = "Mot de passe" /> <br/> <br/>
            <input type="password" name="newc_password" placeholder = "Confirmer le mot de passe " /> <br/> <br/>
            
            <label>Avatar :</label>
            <input type="file" name="avatar" /> <br/>
            <input type="submit" value="Mettre à jour mon profil !"/> 
            <br/>
            <img src = "media/categorie/<?php echo $_smarty_tpl->tpl_vars['data']->value['INFORMATIONS']['AVATAR'];?>
" width = "400" height = "250" />
         
        </form>
   
    </body>
</html> -->

<?php
}
}
/* {/block "content"} */
}
