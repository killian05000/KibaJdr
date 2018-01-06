<?php
/* Smarty version 3.1.30, created on 2018-01-07 00:22:04
  from "C:\xampp\htdocs\KibaJdr\application\views\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a515a1ce87b96_10434870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0eaba36a81ae4aa98b12bcebf2924a5775af56ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\KibaJdr\\application\\views\\layout.tpl',
      1 => 1515280919,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:application/views/layout/layout_entete.inc.tpl' => 1,
    'file:application/views/layout/layout_pied.inc.tpl' => 1,
  ),
),false)) {
function content_5a515a1ce87b96_10434870 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="fr">
<header>
	<?php $_smarty_tpl->_subTemplateRender("file:application/views/layout/layout_entete.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</header>
<body>
    <footer>
        <?php $_smarty_tpl->_subTemplateRender("file:application/views/layout/layout_pied.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </footer>
</body>
</html><?php }
}
