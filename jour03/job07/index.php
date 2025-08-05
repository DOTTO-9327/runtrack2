<?php
//Créez une variable de type string nommée $str et affectez y le texte :
//“Certaines choses changent, et d'autres ne changeront jamais.”
//Créer un algorithme qui parcourt cette string en remplaçant le premier caractère par le deuxième, le deuxième par le troisième etc.. et le dernier par le premier.
// Ex. : Ertaines choses changent, et d'autres ne changeront jamais.c


// qu'est ce qu'on nous demande de faire ? 
// On nous demande de bouger chaque lettre d’un cran vers la gauche: La 2ème lettre va à la place de la 1ère, la 3ème lettre va à la place de la 2ème, la 4ème va à la place de la 3ème..., et la dernière lettre (le ".") doit aller à la 1ère place. Comme un cercle qui tourne. 




$str = "Certaines choses changent, et d'autres ne changeront jamais."; 

$newStr = ""; // on crée une nouvelle chaîne vide pour récupérer la première lettre "C" à la fin . 

for ($i = 1; isset($str[$i]); $i++) //  Cette boucle for dit : Commence à la position 0.Tant qu’il existe un caractère à la position $i + 1, continue. Avance de 1 à chaque tour On utilise isset($str[$i + 1]) pour vérifier si le caractère suivant existe (comme demander "Est-ce qu'il y a encore une lettre après celle-ci ?").
 

{
    $newStr =  $newStr . $str[$i]; // on ajoute la lettre suivante à la nouvelle chaîne
    // on utilise le "." pour incrémenter la chaîne de caractère. on utilise souvent "+" s'il s'agit des nombres.
}

// À la fin, on ajoute la première lettre à la fin de la chaîne
$newStr = $newStr . $str[0];

echo $newStr;







?>