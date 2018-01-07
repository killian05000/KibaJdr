<?php
/* Smarty version 3.1.30, created on 2018-01-07 15:22:40
  from "C:\xampp\htdocs\KibaJdr\application\views\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a522d304db1f5_66769103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0eaba36a81ae4aa98b12bcebf2924a5775af56ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\KibaJdr\\application\\views\\layout.tpl',
      1 => 1515334842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:application/views/layout/layout_entete.inc.tpl' => 1,
    'file:application/views/nav/nav.inc.tpl' => 1,
    'file:application/views/layout/layout_pied.inc.tpl' => 1,
  ),
),false)) {
function content_5a522d304db1f5_66769103 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="asset/css/style.css"/>
	<title>KibaJdr</title>
</head>
<header>
	<?php $_smarty_tpl->_subTemplateRender("file:application/views/layout/layout_entete.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</header>
<body>
	<head>
		<?php $_smarty_tpl->_subTemplateRender("file:application/views/nav/nav.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</head>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18558781415a522d304d9cf6_84880252', "content");
?>

    <footer>
        <?php $_smarty_tpl->_subTemplateRender("file:application/views/layout/layout_pied.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </footer>
</body>
</html><?php }
/* {block "content"} */
class Block_18558781415a522d304d9cf6_84880252 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php
}
}
/* {/block "content"} */
}
