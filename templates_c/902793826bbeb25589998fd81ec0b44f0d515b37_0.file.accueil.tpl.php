<?php
/* Smarty version 3.1.30, created on 2018-01-07 00:01:23
  from "D:\xampp\htdocs\KibaJdr\application\views\modules\accueil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5155439ee812_31813980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '902793826bbeb25589998fd81ec0b44f0d515b37' => 
    array (
      0 => 'D:\\xampp\\htdocs\\KibaJdr\\application\\views\\modules\\accueil.tpl',
      1 => 1515279619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a5155439ee812_31813980 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10633649075a5155439ed954_65718367', "content");
?>
;<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_10633649075a5155439ed954_65718367 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<a>cette ligne se trouve dans accueil.tpl voila voila</a>

<p> salut</p>

<body>
ngoerigoerjrehjrehoijreijo
</body>

<?php
}
}
/* {/block "content"} */
}
