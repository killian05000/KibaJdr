<?php
/* Smarty version 3.1.30, created on 2018-01-07 00:07:00
  from "C:\xampp\htdocs\KibaJdr\application\views\modules\accueil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a515694ee2b88_80087217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf62e9d92c53e3baa04901fbbf5569c402be9290' => 
    array (
      0 => 'C:\\xampp\\htdocs\\KibaJdr\\application\\views\\modules\\accueil.tpl',
      1 => 1515280020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:application/views/layout.tpl' => 1,
  ),
),false)) {
function content_5a515694ee2b88_80087217 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11195970185a515694ee2713_04103002', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:application/views/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_11195970185a515694ee2713_04103002 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<a>cette ligne se trouve dans acceuil.tpl voila voila</a>

<p> salut</p>

<body>
ngoerigoerjrehjrehoijreijo
</body>

<?php
}
}
/* {/block "content"} */
}
