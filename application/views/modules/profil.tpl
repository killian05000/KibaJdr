{extends file="../layout.tpl"}

{block name = "content"}

<a>cette ligne se trouve dans profil.tpl</a><br><br>

<table class="table_profil">
	<tr>
		<td>
			Pseudo :
		</td>
		<td>
			{$data['INFORMATIONS']['PSEUDO']}
		</td>
	</tr>
		<tr>
		<td>
			Nom :
		</td>
		<td>
			{$data['INFORMATIONS']['NOM']}
		</td>
	</tr>
		<tr>
		<td>
			Prenom :
		</td>
		<td>
			{$data['INFORMATIONS']['PRENOM']}
		</td>
	</tr>
		<tr>
		<td>
			Adresse mail :
		</td>
		<td>
			{$data['INFORMATIONS']['MAIL']}
		</td>
	</tr>
	<tr>
		<td>		
			Avatar :
		</td>
		<td>
		 	<img src = "media/categorie/{$data['INFORMATIONS']['AVATAR']}" width = "400" height = "250" />
		</td>
	</tr>
</table>

{/block};