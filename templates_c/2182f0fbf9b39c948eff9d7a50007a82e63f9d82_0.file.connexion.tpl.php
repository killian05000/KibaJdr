<?php
/* Smarty version 3.1.30, created on 2018-01-07 16:41:17
  from "C:\xampp\htdocs\KibaJdr\application\views\modules\connexion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a523f9de2b037_30765436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2182f0fbf9b39c948eff9d7a50007a82e63f9d82' => 
    array (
      0 => 'C:\\xampp\\htdocs\\KibaJdr\\application\\views\\modules\\connexion.tpl',
      1 => 1515339675,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a523f9de2b037_30765436 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10096524945a523f9de2aac2_76636894', "content");
?>
;

<!--  <html>
        <head>
            <title> Connexion</title>
        </head>
    <header>
    </header>
    <body>
    <form action="traitement_connexion.php" method="post" >
        <table>
            <tr>
                <td>
                    <label for="id">Adresse mail : </label>
                </td>
                <td>
                    <input type="email" name="email" id="em" placeholder="Email"> 
                </td>
            </tr>
            <tr>
                <td>
                    <label for="id">Mot de passe : </label>
                </td>
                <td>
                    <input type="password" name="password" id="md" placeholder="mot de passe "> 
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
            <td>
                <input type="submit" name="submit" value="Se connecter">
            </td>
            </tr>
       </table>  
        </form>
  </body>
</html> --><?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_10096524945a523f9de2aac2_76636894 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<a>cette ligne se trouve dans connexion.tpl</a>

<?php
}
}
/* {/block "content"} */
}
