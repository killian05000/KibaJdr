<?php
/* Smarty version 3.1.30, created on 2018-01-07 21:49:28
  from "C:\xampp\htdocs\KibaJdr\application\views\modules\inscription.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5287d857a397_25766927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dab9d63e64c41864c88f80000ce7f5fd4a0a4ae9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\KibaJdr\\application\\views\\modules\\inscription.tpl',
      1 => 1515357449,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a5287d857a397_25766927 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3770783995a5287d8579da3_52495933', "content");
?>
;<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_3770783995a5287d8579da3_52495933 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


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
                    <input type="text" name="nom" id="champ_case" placeholder="Nom"> 
                </td>
            </tr>
            <tr>
                <td>
                    <label for="id">Choisissez votre prenom: </label>
                </td>
                <td>
                    <input type="text" name="prenom" id="champ_case" placeholder="Prenom"> 
                </td>
            </tr>
            <tr>
                <td>
                    <label for="id">Choisissez votre mot de passe : </label>
                </td>
                <td>
                    <input type="password" name="password" id="champ_case" placeholder="Mot de passe "> 
                </td>
            </tr>
            <tr>
                <td>
                    <label for="id">Confirmer votre mot de passe : </label>
                </td>
                <td>
                    <input type="password" name="c_password" id="champ_case" placeholder=" Confirmer mot de passe "> 
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

<?php
}
}
/* {/block "content"} */
}