<!-- Afficher tous les nombres de 0 à 1337 compris SAUF 26, 37, 88, 1111 et 3233 en
mettant un retour à la ligne entre chaque nombre (<br />). -->

<!-- PARCOURIR tous les nombres de 0 à 1337 compris -->

<!-- SI pendant la boucle, tu trouves les nombres 26, 37, 88, et 1111, ne pas les afficher  -->

<!-- SINON  tu continue par afficher tous les autres nombres  -->

<!-- mettre un retour à la ligne à chaque nombre  -->



<?php
    for ($i = 0; $i <= 1337; $i++) 
    {
        if ($i == 26 OR $i == 37 OR $i == 88 OR $i == 1111 ) continue; 
        

            {echo"$i<br/>";}

    }
            

?>