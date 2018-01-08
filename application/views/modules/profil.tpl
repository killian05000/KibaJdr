{extends file="../layout.tpl"}

{block name = "content"}

<form action="" method="post">
	<table id = "table_profil">
		<tr>
			<td>
				Pseudo :
			</td>
			<td>
				<a id="informations_profil">{$data['INFORMATIONS']['PSEUDO']}</a>
			</td>
		</tr>

		<tr>
			<td>
				Nom :
			</td>
			<td>
				<a id="informations_profil">{$data['INFORMATIONS']['NOM']}</a>
			</td>
		</tr>

		<tr>
			<td>
				Prenom :
			</td>
			<td>
				<a id="informations_profil">{$data['INFORMATIONS']['PRENOM']}</a>
			</td>
		</tr>
		
		<tr>
			<td>
				Adresse mail :
			</td>
			<td>
				<a id="informations_profil">{$data['INFORMATIONS']['MAIL']}</a>
			</td>
		</tr>

		<tr>
			<td>		
				Avatar :
			</td>
			<td>
			 	<img id="informations_profil" src = "asset/images/{$data['INFORMATIONS']['AVATAR']}" width = "300" height = "250" />
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

{/block};