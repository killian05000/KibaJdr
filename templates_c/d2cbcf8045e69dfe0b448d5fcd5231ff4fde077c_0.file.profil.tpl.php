<?php
/* Smarty version 3.1.30, created on 2018-01-08 00:07:26
  from "C:\xampp\htdocs\KibaJdr\application\views\modules\profil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a52a82e2dab95_82888031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2cbcf8045e69dfe0b448d5fcd5231ff4fde077c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\KibaJdr\\application\\views\\modules\\profil.tpl',
      1 => 1515366437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a52a82e2dab95_82888031 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6285512305a52a82e2da5c3_67019217', "content");
?>
;<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_6285512305a52a82e2da5c3_67019217 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<a>cette ligne se trouve dans profil.tpl</a><br><br>

<table class="table_profil">
	<tr>
		<td>
			Pseudo :
		</td>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['data']->value['INFORMATIONS']['PSEUDO'];?>

		</td>
	</tr>
		<tr>
		<td>
			Nom :
		</td>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['data']->value['INFORMATIONS']['NOM'];?>

		</td>
	</tr>
		<tr>
		<td>
			Prenom :
		</td>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['data']->value['INFORMATIONS']['PRENOM'];?>

		</td>
	</tr>
		<tr>
		<td>
			Adresse mail :
		</td>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['data']->value['INFORMATIONS']['MAIL'];?>

		</td>
	</tr>
	<tr>
		<td>		
			Avatar :
		</td>
		<td>
		 	<img src = "media/categorie/<?php echo $_smarty_tpl->tpl_vars['data']->value['INFORMATIONS']['AVATAR'];?>
" width = "400" height = "250" />
		</td>
	</tr>
</table>

<?php
}
}
/* {/block "content"} */
}
