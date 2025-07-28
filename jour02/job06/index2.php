<?php


//-----RECTANGLE VIDE AVEC LES ETOILE EN CONTOUR-----/


$hauteur = 10; // nombre de lignes
$largeur = 20; // nombre d’étoiles par ligne

// parcourir la dimension de la hauteur de 1 à 10. 
for ($i = 0; $i < $hauteur; $i++) 
{
    // parcourir la dimension de la largeur de 1 à 20.        
    for ($j = 0; $j < $largeur; $j++) 
    {
        if ($i == 0  || $i == $hauteur - 1 || $j == 0 || $j == $largeur - 1) // si $j est égale à 1 qui est mon point de départ (hauteur), "OU" que $i qui est mon point d'arrivé (largeur) est égale à 1 ou qu'il est égale à 20 qui est la largeur, alors tu affiches "*"  
        {
            echo "* &nbsp";
        } 
        else 
        {
            echo "&nbsp;&nbsp;&nbsp;&nbsp"; // si non affiche des espaces  
        }
    }
    echo "<br>";
}

