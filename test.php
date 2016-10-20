<?php

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table personnage
$reponse = $bdd->query('SELECT * FROM t_personnage');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong>perso</strong> : <?php echo $name['nom']; ?><br />
    Le personnage est : <?php echo $donnees['possesseur']; ?>, et il  à  <?php echo $donnees['force']; ?> force !<br />
    Ce personnage a un niveau de <?php echo $donnees['niveau']; ?> et à <?php echo $donnees['degats']; ?> de degats<br />
    <?php echo $donnees['exp']; ?> est son experience 
   </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>