{extends file="../layout.tpl"}

{block name = "content"}

<a>cette ligne se trouve dans publication.tpl</a><br><br><br>

	{foreach key=key item=categorie from=$data['INFORMATIONS']}
		<!--{$categorie['ID']} -->
		{$categorie['LABEL']}
		<img src = "media/categorie/{$categorie['ILLUSTRATION']}" width = "400" height = "250" />

	{/foreach}
{/block};