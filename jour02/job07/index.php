<?php 

//Faire un algorithme qui affiche un triangle de 5 de hauteur. Cette dimension devra être stockée dans une variable $hauteur, modifiable facilement.
//Exemple si $hauteur = 5




// qu'est ce que nous voulons faire?
// nous voulons réaliser un triangle avec une hauteur de 5 et facilement modifiable 
// c'est à dire que losqu'on modifie la valeur de la hauteur qui est "5" en "50" par exemple, il faut que notre triangle s'agrandit aussi naturellement sans affecter l'ensemble de l'algorithme.
// pour se faire, il faut qu'on procède ligne par ligne car notre cher robot écrit de gauche à droite et de haut en bas. 
// il faut noter également que le robot ne peut pas revenir en arrière au cours de sa mission, que se soit de remonter une ligne ou de revenir à gauche
// nous allons donc faire 3 boucles:
// la première va parcourir les lignes de la hauteur du triangle
// la deuxième va parcourir les espaces au début de chaque ligne. ces espaces doivent être en mode décroissant à compter du nombre d'espaces de la première ligne. c'est à dire, à chaque retour à la ligne, on fait (-1) pour trouver le nombre d'espaces suivant. nous mettrons un (/) à la fin 
// la troisième boucle quant-à elle, va parcourir les espaces après les (/) . ces espaces commencent à (0), et on fait (+2) à chaque retour à la ligne (<br/>). nous mettrons un (\) à la fin. 
// faire(_)pour le bas du triangle lorsque la hauteur atteint (5) 

//on aura donc besoin pour réaliser notre code de: la boucle for, $, i, <, =, ++, --, echo, &nbsp, br, /, \, _, >






$hauteur = 5;

for($i=0; $i<=$hauteur; $i++) 
{
    for($j = 0; $j < $hauteur - $i; $j++) 
    {
        echo"&nbsp;&nbsp"; 

    }

    echo"/";

    for($k=0; $k<$i*2; $k++)
    {

        if($i==$hauteur)
        {
            echo"_";
        }
        else{
             echo"&nbsp;&nbsp"; 
        }
    }

    echo"\\";


    
    echo"<br/>"; 

}







?>