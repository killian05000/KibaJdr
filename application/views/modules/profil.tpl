{extends file="../layout.tpl"}

{block name = "content"}

<a>cette ligne se trouve dans profil.tpl</a><br><br>

pseudo : {$data['INFORMATIONS']['PSEUDO']}
<br>
nom : {$data['INFORMATIONS']['NOM']}
<br>
prenom : {$data['INFORMATIONS']['PRENOM']}
<br>
adresse mail : {$data['INFORMATIONS']['MAIL']}
<br>
avatar : <img src = "media/categorie/{$data['INFORMATIONS']['AVATAR']}" width = "400" height = "250" />


{/block};