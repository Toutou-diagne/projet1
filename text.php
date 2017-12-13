<?php
echo "fichier texte";
?>
<br>
<a href="afficheH.php">heure</a> <br>
<a href="calcula.php">calculatrice</a>

<?php
$doc= fopen('doc.txt',"r+");

$nom= fgets($doc,255);
fclose ($doc);
echo $nom;
?>