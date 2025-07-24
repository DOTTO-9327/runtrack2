<?php
// Faire un algorithme qui affiche les nombres premiers jusqu’à 1000 
// en mettant un retour à la ligne entre chaque nombre (“<br />”).




// comment trouver les nombres premiers jusquà 1000?
// on part du principe que 0 et 1 ne sont pas des nombres premiers
// on commence donc par 2 et on teste chaque nombre jusquà 1000 
// comment les tester? 
// pour chaque nombre, on regarde si il se divise sans "reste" par un autre nombre que 1 et lui même?
// SI oui, il nest pas un nombre premier
// SI non, c'est un nombre premier
// ou 
// pour chaque nombre de 2 à 1000, on regarde si le nombre a un diviseur autre que 1 et lui même? 
// si oui, ne rien faire 
// si non afficher ce nombre 





// parcourir tous les nombres entre 2 et 1000 
// faire une Boucle de 2 à 1000
for ($i = 2; $i <= 1000; $i++) // dans cette boucle on remarque clairement que le premier nombre à tester est 2 et tant que $i est inférieur ou égal à 1000, continue
//a chaque tour de boucle, ajoute 1 à $i c'est à dire incrémenter de 1

// maintenant le but est de tester tous les nombres de 2 à 1000 dans cette boucle, ce qui donnera lieu a une nouvelle boucle à l'intérieur de notre première boucle
    
    {
    $estPremier = true; // si la valeur de la variable "$" est un nombre premier, alors c'est "vrai" (true)
    // on suppose donc que "i" est un nombre premier et qu'on le met dans une variable qu'on appelle "$estpremier" (ça signifie "isprime" en français), elle est mise à "true" (vrai) jusqu'à preuve du contraire. "true" étant une valeur de type bouleen. 

    // nous ouvrons à présent notre nouvelle boucle fort pour tester.
    // puisque nous avons déjà "i" comme valeur, on prendra une autre lettre "j"
    for ($j = 2; $j < $i; $j++) // cette nouvelle boucle veut dire que'on commence maintenant avec $j = 2 et tant que $j est inférieur à $i, continue mais fait $j++ à chaque tour de boucle pour tester le diviseur suivant.
    
    // jusqu'ici nous avons pas encore atteind notre objectif qui est de tester si un autre nombre que "1" et "$i" peut diviser "$i". 

        {
        if ($i % $j == 0) // nous nous posons la question ici de savoir si "$i" se divise exacement par "$j" ? étant donné que nous savons tous que le symbole "%" veut dire "modulus" et donne le reste de la division. Néanmoins, si le reste de notre "if" donne "0", alors $j a un diviseur autre que "1" ou "$i". ce qui veut dire que "$i"  n'est pas un nombre premier. 
            {
            $estPremier = false; // ne fait rien si ce n'est pas un nombre premier. 

            break; //  et si cela en est ainsi, stoppe la boucle tout de suite car on a plus besoin de tester les autres "$j" et on a déjà prouvé que ce n'est pas un nombre premier.
            // On arrête si on trouve un diviseur. 

            }
        }

         // Si on a trouvé aucun diviseur, c’est un nombre premier
        if ($estPremier) // après avoir fini e tester tous les "$j", si "$estPremier" est encore "true", c'est évident qu'on n'a pas trouvé de diviseur.
        // c'est donc un nombre premier. on peut l'afficher.

            {
            echo $i . "<br/>" ; // Affiche le nombre avec un retour à la ligne
            }
    }


?>