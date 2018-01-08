<?php
/* Smarty version 3.1.30, created on 2018-01-08 04:10:37
  from "C:\xampp\htdocs\KibaJdr\application\views\modules\publications.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a52e12da933a6_26526961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57ee777bc3099aa94938948c860df778f10e2aef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\KibaJdr\\application\\views\\modules\\publications.tpl',
      1 => 1515381034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a52e12da933a6_26526961 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10241098995a52e12da91e36_21207005', "content");
?>
;<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_10241098995a52e12da91e36_21207005 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<a>Voici les differentes catégories :</a><br><br><br>

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['INFORMATIONS'], 'categorie', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['categorie']->value) {
?>

		<a id="categorie_title"><?php echo $_smarty_tpl->tpl_vars['categorie']->value['LABEL'];?>
</a>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	<br>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['INFORMATIONS'], 'categorie', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['categorie']->value) {
?>
		<!--<?php echo $_smarty_tpl->tpl_vars['categorie']->value['ID'];?>
 -->
		<img src = "media/categorie/<?php echo $_smarty_tpl->tpl_vars['categorie']->value['ILLUSTRATION'];?>
" width = "400" height = "250" />

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php
}
}
/* {/block "content"} */
}
