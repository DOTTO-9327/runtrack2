<?php

// Faire un algorithme qui affiche un rectangle de 20 de largeur par 10 de hauteur.
// Ces dimensions devront être stockées dans deux variables $largeur et $hauteur, modifiables facilement.  


// nous volons dessiner un rectangle avec des carctères
// ce rectangle doit avoir 20 caractères de large (horizontale) et 10 lignes de haut(vertical)
// pour le faire, nous devons stocker les les dimenssions dans 2 variables différentes à savoir $largeur et $hauteur
// ces variables doivent être facilement modifiable. 





//-----RECTANGLE PLEIN AVEC LES ETOILE/PROCEDURE----/


$largeur = 20; // nombre d’étoiles par ligne
$hauteur = 10; // nombre de lignes

for ($i = 0; $i < $hauteur; $i++) // cette boucle gère le nombre de lignes. on commence à $i=0 et on continue tant que $i est plus petit que $hauteur.
// à chaque tour de boucle, on ajoute 1 à $i ($i++)
// cette boucle va tourner 10 fois si $hauteur=10
// place maintenant à la deuxième boucle pour gerer la largeur($largeur)
{
    for ($j = 0; $j < $largeur; $j++) // cette boucle va afficher 20 étoiles  
    {
        echo "* &nbsp";
    }
    echo "<br/>"; // retour à la ligne après chaque ligne d’étoiles
}
  

?>