<?php
//Créez une variable de type string nommée $str et affectez y le texte :
//“Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.”
//Parcourir cette chaîne en affichant seulement un caractère sur deux.
//Ex. : Tu e ntnssrn edsdn etmscmelslre osl li.



// qu'est ce que nous voulons faire? 
// nous avons une phrase (chaîne de caractère), que nous devons parcourir lettre par lettre mais en sautant un caractère sur deux. 
// il faut noter que dans une chaîne ne caractère, même les espaces compte
// nous allons découvrir ici une nouvelles fonction qui est "isset" 
// isset() renverra false lors de la vérification d'une variable de valeur null ou si elle n'existe pas. Il est à noter que aussi que le caractère nul ( "\0" ) n'est pas équivalent à la constante PHP null . Si plusieurs paramètres sont fournis, alors isset() retournera true seulement si tous les paramètres sont définis.

$str= "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie."; // nous venons de créer une variable $str qui est égale à la phrase qu'on nous a donné. 

for($i=0; isset($str[$i]); $i += 2) // nous venons de former notre boucle "for".
    
{
    echo $str[$i]; 
}

?>