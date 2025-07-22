<?php
// Afficher tous les nombres compris entre 0 et 1337 en mettant un retour à la ligne entre
// chaque nombre (<br />).
// Le nombre 42 doit être en gras et souligné (<b><u>...).

// Parcourir chaque nombre entre 0 et 1337
//       Si le nombre est egal à 42 ALORS
//      Afficher le nombre en gras  et souligné et aller a la ligne
//
//      SINON 
//          Afficher tous les autres nombres et aller à la ligne
//          

//  Parcourir chaque nombre entre 0 et 1337
for ($i = 0; $i <= 1337; $i = $i++) 
    {  //       Si le nombre est egal à 42 ALORS
        if ($i == 42) 
            {  //      Afficher le nombre en gras  et souligné et aller a la ligne
                echo "<b><u>$i</u></b><br/>";
    //      SINON 
            } else {
  //          Afficher tous les autres nombres et aller à la ligne
        echo "$i<br/>";
    }
}


?>