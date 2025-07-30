<?php

// Étape 1 : Créer un tableau avec les nombres
$nombres = [200, 204, 173, 98, 171, 404, 459];// on vient de crer une variable tableau appelée $nombre qui contient tous les nombres à vérifer. nous pouvons le prendre comme une boite avec 7 nombres à l'intérieur. 

// Étape 2 : Parcourir le tableau
foreach ($nombres as $nombre) // cette boucle veut dire pour chaque nombre dans $nombres, on le prend un par un, et on le met dans la variable  $nombre
{

    // Étape 3 : Vérifier si le nombre est pair ou impair
    if ($nombre % 2 == 0) // pour un petit rappel, le "%" veut dire donne moi le reste de cette division. 
    {
        echo $nombre . " est paire <br/>";
    } 
    
    else 
    {
        echo $nombre . " est impaire <br/>";
    }
}

?>