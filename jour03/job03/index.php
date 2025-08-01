<?php
//Créez une variable de type string nommée $str et affectez y le texte :
//“I'm sorry Dave I'm afraid I can't do that”.
//Créez un algorithme qui parcourt cette chaîne et affiche uniquement les voyelles.
//Ex. : IoyaeIaaiIaoa


// pour cet exercice, nous alloons d'abord créer une variable de type $str qui contient toute la chaîne de caractère.
$str= "I'm sorry Dave I'm afraid I can't do that";

$voyelles= ["a", "e", "i", "o", "u", "y"]; // nous avons ensuite créer un tableau dans lequel se trouve tous les voyelles de l'alphabet français. ainsi aucours de la boucle, notre cher robot va pouvoir les détecter et les faire ressortir. 

for($i=0; isset($str[$i]); $i++) // notre boucle "for" va parcourir notre chaîne de caractère en commençant par "0"
{
    foreach($voyelles as $voy)
    {
        if($str[$i]==$voy)
        {
            echo $voy;
        }
    }
}


?>