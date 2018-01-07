{extends file="../layout.tpl"}

{block name = "content"}

<a>cette ligne se trouve dans publication.tpl</a><br><br><br>

	{foreach key=key item=categorie from=$data['INFORMATIONS']}

		<a id="categorie_title">{$categorie['LABEL']</a>

	{/foreach}
	<br>
	{foreach key=key item=categorie from=$data['INFORMATIONS']}
		<!--{$categorie['ID']} -->
		<img src = "media/categorie/{$categorie['ILLUSTRATION']}" width = "400" height = "250" />

	{/foreach}
{/block};