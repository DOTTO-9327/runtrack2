<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <style>

        body {
            height: 100%;
        }

        table {
            margin: auto;
            margin-top: 15%;
        }

        table,
        th,
            td {
                border: solid 2px black; 
                width: 400px;
                height: 50px; 
            }

    </style>

<?php
// Créez une variable de type string nommée $str et affectez y le texte :
// “On n’est pas le meilleur quand on le croit mais quand on le sait”.
// Créez un dictionnaire (tableau keys/values) nommé $dic qui a comme keys
// “consonnes” et “voyelles”. Créez un algorithme qui parcourt, compte et stocke le nombre d'occurrences de consonnes et de voyelles de $str.
// Affichez ces résultats dans un tableau <table> html qui a comme <thead> "Voyelles" et "Consonnes"


// pour cet execice, nous avons une chaîne de caractère(string), un dictionneire (tableau associatif "php"), une boucle pour parcourir, et un peu de "HTML" pour afficher joliment le résultat dans une table. 




// Étape 1 : phrase à analyser
$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";

// Étape 2 : tableau dictionnaire pour stocker les résultats
$dic = ["voyelles" => ['a', 'e', 'i', 'o', 'u', 'y'], // liste des voyelles
"consonnes" => ["b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "z"] // liste de consonnes
 ];

 // Etape 3 : nous allons à présent créer les variables de compteur
 $nbrvoyelles = 0;
 $nbrconsonnes = 0;


// Étape 4 : parcourir chaque caractère avec une boucle "for"

for ($i = 0; isset($str[$i]); $i++) 
    {
        foreach ($dic["consonnes"] as $conx) 
        {
            if ($str[$i]=== $conx)
                $nbrconsonnes++; 

        }
    }


for ($j = 0; isset($str[$j]); $j++) 
    {
        foreach ($dic["voyelles"] as $voy) 
        {
            if ($str[$j]=== $voy)
                $nbrvoyelles++; 

        }
    }
          


?>
 
 <table> 
    <thead>
        <tr>
            <th>Voyelles</th>
            <th>Consonnes</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td> <?php echo "$nbrvoyelles"?> </td>
            <td><?php echo "$nbrconsonnes"?> </td>
        </tr>
    </tbody>
</table>



</body>
</html>

