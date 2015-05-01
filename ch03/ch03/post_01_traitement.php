<?php

$pv=$_POST['pv'];
$fond=$_POST['fond'];
$min=$pv/$fond;

?>
<!DOCTYPE html>

<html lang="fr">
    
<head>
    
<title>Calcul d'intérêts</title>

<meta charset="utf-8">

</head>

<body>
<h1>resultat</h1>

<?php
if ($min<5) {
echo "Vous avez les fond nécessaire";
}else{
echo "Vous n'avez pas les fonds nécessaire";
}
?>



</body>

</html>
