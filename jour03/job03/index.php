<?php
//Créez une variable de type string nommée $str et affectez y le texte :
//“I'm sorry Dave I'm afraid I can't do that”.
//Créez un algorithme qui parcourt cette chaîne et affiche uniquement les voyelles.
//Ex. : IoyaeIaaiIaoa

$str= "I'm sorry Dave I'm afraid I can't do that";

$voyelles= ["a", "e", "i", "o", "u", "y"]; 

for($i=0; isset($str[$i]); $i++)
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