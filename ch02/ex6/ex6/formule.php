<!DOCTYPE html>
<form name="formulaire" method="post" action="formule.php">
    Pv de la maison de vos reve:
    <input name="pv_maison_reve" type="text" size="15">
    <br>
    
    Fonds propres dont vous disposez:
    <input name="fond_propre" type="text" size="15">
    <br>

    <input name="submit" type="submit" value="Envoyer">
</form>



<?php
    $pv = $_POST['pv_maison_reve']; 
    $fond = $_POST['fond_propre']; 
    $emprunt = 0;
    $emprunt1 = 0;
    $emprunt2 = 0;
    $interet1 = 0;
    $interet2 = 0;
        
        
    $emprunt = $pv - $fond;
        
    if($fond < (($pv/100)*20)) {
        
        echo "Vous n'avez pas le montant requis!";
    }
    
    
    if($fond >= (($pv/100)*50)) {
        echo"Vous avez le montant nécesaire pour que la somme vous soit prété au second rang";
        $emprunt2 = (($emprunt / 100) * 80);
        echo "l'emprunt est de $emprunt2 ";
    }
    
?>
