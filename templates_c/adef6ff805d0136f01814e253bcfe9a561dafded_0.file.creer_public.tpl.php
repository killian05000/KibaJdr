<?php
/* Smarty version 3.1.30, created on 2018-01-08 03:46:15
  from "C:\xampp\htdocs\KibaJdr\application\views\modules\creer_public.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a52db776fbe81_60384514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adef6ff805d0136f01814e253bcfe9a561dafded' => 
    array (
      0 => 'C:\\xampp\\htdocs\\KibaJdr\\application\\views\\modules\\creer_public.tpl',
      1 => 1515379378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a52db776fbe81_60384514 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14715489705a52db776fb914_90036150', "content");
?>
;<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_14715489705a52db776fb914_90036150 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form  method ="POST"  enctype="multipart/form-data">
    <table id = "table_profil">
        <tr>
            <td>
                Titre :
            </td>
            <td>
                <input class="champ_case informations_editprofil" type = "text" name = "titre" placeholder="titre"  value="<?php echo $_smarty_tpl->tpl_vars['data']->value['INFORMATIONS']['TITRE'];?>
"/>
            </td>
        </tr>

        <tr>
            <td>
                Duree :
            </td>
            <td>
                <input class="champ_case informations_editprofil" type = "text" name = "duree" placeholder="duree"  value="<?php echo $_smarty_tpl->tpl_vars['data']->value['INFORMATIONS']['DUREE'];?>
"/>
            </td>
        </tr>

        <tr>
            <td>
                Difficulté :
            </td>
            <td>
                <input class="champ_case informations_editprofil" type = "text" name = "difficulte" placeholder="difficulte"  value="<?php echo $_smarty_tpl->tpl_vars['data']->value['INFORMATIONS']['DIFFICULTE'];?>
"/>
            </td>
        </tr>
        
        <tr>
            <td>
                Nombre de personnes :
            </td>
            <td>
                <input class="champ_case informations_editprofil" type = "text" name = "nbpersonne" placeholder="nbpersonne"  value="<?php echo $_smarty_tpl->tpl_vars['data']->value['INFORMATIONS']['NBPERSONNE'];?>
"/>
            </td>
        </tr>

        <tr>
            <td>        
                Description :
            </td>
            <td>
                <textarea class="champ_case informations_editprofil" name="contenu" placeholder="Contenu de la Rubrique"><?php echo $_smarty_tpl->tpl_vars['data']->value['INFORMATIONS']['DESCRIPTION'];?>
</textarea>
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



<?php
}
}
/* {/block "content"} */
}
