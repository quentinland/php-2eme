<!doctype html>
<html>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<body>
<form name="formulaire" method="post" action="form_traitement.php">
login:
<input name="login" type="text" size="15">
<br>
Votre mot de passe:
<input name="motdepasse" type="text" size="15">
<br>
Majeur
<SELECT name="majeur" size="1">
<OPTION selected>Oui
<OPTION>Non

</SELECT>
<br>
Type
<SELECT name="type" size="1">
<OPTION selected>Homme 
<OPTION>Femelle

</SELECT>
<br>

Options
<SELECT name="options" size="1">
<OPTION selected>Lettre de nouvelle
<OPTION>Membre de soutien

</SELECT>

<br>
<input name="submit" type="submit" value="Envoyer">
</form>
</body>
