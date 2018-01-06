<?php
/* Smarty version 3.1.30, created on 2018-01-07 00:06:04
  from "D:\xampp\htdocs\KibaJdr\application\views\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a51565c7837a6_42933710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6705ba17733f4feb84285dfb66f56d98ca739379' => 
    array (
      0 => 'D:\\xampp\\htdocs\\KibaJdr\\application\\views\\layout.tpl',
      1 => 1515279959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:application/views/layout/layout_entete.inc.tpl' => 1,
    'file:application/views/layout/layout_pied.inc.tpl' => 1,
  ),
),false)) {
function content_5a51565c7837a6_42933710 (Smarty_Internal_Template $_smarty_tpl) {
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
