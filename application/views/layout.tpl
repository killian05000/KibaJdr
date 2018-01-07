<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="asset/css/style.css"/>
	<title>KibaJdr</title>
</head>
<header id="main_header">
	{include file='application/views/layout/layout_entete.inc.tpl'}
</header>
<body>
	<head>
		{include file='application/views/nav/nav.inc.tpl'}
		<br><br><br>
	</head>
		{block name = "content"}
		{/block}
    <footer>
        {include file='application/views/layout/layout_pied.inc.tpl'}
    </footer>
</body>
</html>