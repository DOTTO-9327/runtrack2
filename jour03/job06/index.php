<?php
//Créez une variable de type string nommée $str et affectez y le texte :
//“Les choses que l'on possède finissent par nous posséder."
//Créez un algorithme qui parcourt et écrit cette chaine à l’envers.
//Ex. : redessop suon rap tnessinif edessop no'l euq sesohc seL



// qu'est ce que nous voulons faire? 
// nous allons lire la phrase q'on nous a donné à l'envers
// la première lettre devient doc la dernière ainsi de suite 
// tous les caractères sont inversés, y compris les espaces, les apostrophes, les points...


// créons une variable "$str" avec la phrase. 

$str= "Les choses que l'on possede finissent par nous posseder.";

// nous allons à présent céer une boucle "for" qui va parcourir l'ensemble de la chaîne de caractère et les afficher à l'envers

for($i=-1; isset($str[$i]); $i--) 
{
    echo $str[$i]; // afficher "$i"
}

?>