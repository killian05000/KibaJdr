<?php
/* Smarty version 3.1.30, created on 2018-01-08 04:10:45
  from "C:\xampp\htdocs\KibaJdr\application\views\modules\profil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a52e135624de9_06507244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2cbcf8045e69dfe0b448d5fcd5231ff4fde077c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\KibaJdr\\application\\views\\modules\\profil.tpl',
      1 => 1515380933,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a52e135624de9_06507244 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14719300685a52e1356247f2_11448486', "content");
?>
;<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_14719300685a52e1356247f2_11448486 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="" method="post">
	<table id = "table_profil">
		<tr>
			<td>
				Pseudo :
			</td>
			<td>
				<a id="informations_profil"><?php echo $_smarty_tpl->tpl_vars['data']->value['INFORMATIONS']['PSEUDO'];?>
</a>
			</td>
		</tr>

		<tr>
			<td>
				Nom :
			</td>
			<td>
				<a id="informations_profil"><?php echo $_smarty_tpl->tpl_vars['data']->value['INFORMATIONS']['NOM'];?>
</a>
			</td>
		</tr>

		<tr>
			<td>
				Prenom :
			</td>
			<td>
				<a id="informations_profil"><?php echo $_smarty_tpl->tpl_vars['data']->value['INFORMATIONS']['PRENOM'];?>
</a>
			</td>
		</tr>
		
		<tr>
			<td>
				Adresse mail :
			</td>
			<td>
				<a id="informations_profil"><?php echo $_smarty_tpl->tpl_vars['data']->value['INFORMATIONS']['MAIL'];?>
</a>
			</td>
		</tr>

		<tr>
			<td>		
				Avatar :
			</td>
			<td>
			 	<img id="informations_profil" src = "asset/images/<?php echo $_smarty_tpl->tpl_vars['data']->value['INFORMATIONS']['AVATAR'];?>
" width = "300" height = "250" />
			</td>
		</tr>
		<tr>
			<td>
			</td>
	        <td>
	            <input class="champ_case informations_editprofil" type="submit" name="submit" value="edit profil">
	        </td>
		</tr>
	</table>
</form>

<?php
}
}
/* {/block "content"} */
}
