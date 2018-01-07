<?php
/* Smarty version 3.1.30, created on 2018-01-07 23:52:21
  from "C:\xampp\htdocs\KibaJdr\application\views\modules\profil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a52a4a5a4d623_72588228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2cbcf8045e69dfe0b448d5fcd5231ff4fde077c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\KibaJdr\\application\\views\\modules\\profil.tpl',
      1 => 1515365540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a52a4a5a4d623_72588228 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9629765535a52a4a5a4d024_79082892', "content");
?>
;<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_9629765535a52a4a5a4d024_79082892 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<a>cette ligne se trouve dans profil.tpl</a><br><br>

pseudo : <?php echo $_smarty_tpl->tpl_vars['data']->value['INFORMATIONS']['PSEUDO'];?>

<br>
nom : <?php echo $_smarty_tpl->tpl_vars['data']->value['INFORMATIONS']['NOM'];?>

<br>
prenom : <?php echo $_smarty_tpl->tpl_vars['data']->value['INFORMATIONS']['PRENOM'];?>

<br>
adresse mail : <?php echo $_smarty_tpl->tpl_vars['data']->value['INFORMATIONS']['MAIL'];?>

<br>
avatar : <img src = "media/categorie/<?php echo $_smarty_tpl->tpl_vars['data']->value['INFORMATIONS']['AVATAR'];?>
" width = "400" height = "250" />


<?php
}
}
/* {/block "content"} */
}
