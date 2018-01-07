{extends file="../layout.tpl"}

{block name = "content"}

<a>cette ligne se trouve dans profil.tpl</a><br><br>

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
		 	<img id="informations_profil" src = "media/categorie/{$data['INFORMATIONS']['AVATAR']}" width = "400" height = "250" />
		</td>
	</tr>
</table>

{/block};