<?php

// Étape 1 : Créer un tableau avec les nombres
$nombres = [200, 204, 173, 98, 171, 404, 459];

// Étape 2 : Parcourir le tableau
foreach ($nombres as $nombre) 
{

    // Étape 3 : Vérifier si le nombre est pair ou impair
    if ($nombre % 2 == 0) 
    {
        echo $nombre . " est paire <br/>";
    } 
    
    else 
    {
        echo $nombre . " est impaire <br/>";
    }
}

?>