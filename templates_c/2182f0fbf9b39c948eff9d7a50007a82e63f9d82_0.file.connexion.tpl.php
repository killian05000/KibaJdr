<?php
/* Smarty version 3.1.30, created on 2018-01-07 21:34:18
  from "C:\xampp\htdocs\KibaJdr\application\views\modules\connexion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a52844a2a4350_66519994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2182f0fbf9b39c948eff9d7a50007a82e63f9d82' => 
    array (
      0 => 'C:\\xampp\\htdocs\\KibaJdr\\application\\views\\modules\\connexion.tpl',
      1 => 1515354434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a52844a2a4350_66519994 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16689110365a52844a2a3dd0_14147171', "content");
?>
;<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_16689110365a52844a2a3dd0_14147171 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<head>
    <title> Connexion</title>
</head>
<header>
</header>
<body>
<form action="" method="post" >
    <table id="taaable">
        <tr>
            <td>
                <label for="id">Adresse mail : </label>
            </td>
            <td>
                <input type="email" name="email" id="champ_case" placeholder="Email"> 
            </td>
        </tr>
        <tr>
            <td>
                <label for="id">Mot de passe : </label>
            </td>
            <td>
                <input type="password" name="password" id="champ_case" placeholder="mot de passe "> 
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
            <input id="champ_case" type="submit" name="submit" value="Se connecter">
        </td>
        </tr>
   </table>  
    </form>
</body>


<?php
}
}
/* {/block "content"} */
}
