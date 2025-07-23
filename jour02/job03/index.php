<?php 
// Afficher les nombres de 0 à 100 en mettant un retour à la ligne entre chaque nombre -->
// (<br />).
// Si le nombre est entre 0 et 20 : écrire en italique (<i>), si le nombre est compris entre 25
// et 50 : souligner.
// Afficher “La Plateforme_” à la place de 42.


// Parcourir les nombres de 0 à 100 en mettant un retour à la ligne à chaque nombre
// lors de la boucle, écrire en italique SI les nombres sont entre 0 et 20 
// lors de la boucle, souligner SI le nombre est compris entre 25 et 50
// SINON, afficher tous les autres nombres normalement
// Afficher “La Plateforme_” à la place de 42.


// Parcourir les nombres de 0 à 100 en mettant un retour à la ligne à chaque nombre
     for ($i = 0; $i <= 100; $i++) 
     {
// lors de la boucle, écrire en italique SI les nombres sont entre 0 et 20 
        if($i<=20)
        {
             echo"<i>$i</i><br/>"; continue;
        }
// Afficher “La Plateforme_” à la place de 42.
        if ($i == 42) 
        {
             echo "La Plateforme_ <br/>"; continue;
        }
// lors de la boucle, souligner SI le nombre est compris entre 25 et 50
        if($i>=25 && $i<=50) 
        {
            echo"<u>$i</u><br/>"; continue; 

        }
// SINON, afficher tous les autres nombres normalement
         else{
            echo "$i<br/>";
        }    

     }
    ?>
