<?php
/* Smarty version 3.1.30, created on 2018-01-08 00:03:25
  from "C:\xampp\htdocs\KibaJdr\application\views\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a52a73dad88b5_22265692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0eaba36a81ae4aa98b12bcebf2924a5775af56ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\KibaJdr\\application\\views\\layout.tpl',
      1 => 1515366201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:application/views/layout/layout_entete.inc.tpl' => 1,
    'file:application/views/nav/nav_membre.inc.tpl' => 1,
    'file:application/views/nav/nav.inc.tpl' => 1,
    'file:application/views/layout/layout_pied.inc.tpl' => 1,
  ),
),false)) {
function content_5a52a73dad88b5_22265692 (Smarty_Internal_Template $_smarty_tpl) {
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
<header id="main_header">
	<?php $_smarty_tpl->_subTemplateRender("file:application/views/layout/layout_entete.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</header>
<body>
	<head>
		<?php if ((isset($_smarty_tpl->tpl_vars['data']->value['connected']) && ($_smarty_tpl->tpl_vars['data']->value['connected'] == 'TRUE'))) {?>
			<?php $_smarty_tpl->_subTemplateRender("file:application/views/nav/nav_membre.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php } else { ?>
			<?php $_smarty_tpl->_subTemplateRender("file:application/views/nav/nav.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php }?>		
	</head>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2669194175a52a73dad7d76_23860607', "content");
?>

    <footer>
        <?php $_smarty_tpl->_subTemplateRender("file:application/views/layout/layout_pied.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </footer>
</body>
</html><?php }
/* {block "content"} */
class Block_2669194175a52a73dad7d76_23860607 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php
}
}
/* {/block "content"} */
}
