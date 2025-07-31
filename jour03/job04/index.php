<?php
// Créez une variable de type string nommée $str et affectez y le texte :
// “Dans l'espace, personne ne vous entend crier”.
// Créez un algorithme qui parcourt, compte et affiche le nombre de caractères présents
// dans cette chaîne.



$str= "Dans l'espace, personne ne vous entend crier";
$nombre_caractère=0;

for ($i=$nombre_caractère; isset($str[$i]); $i++){
   $nombre_caractère++;
}
        echo $nombre_caractère;
?>