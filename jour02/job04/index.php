<?php
// Afficher les nombres de 1 à 100 en mettant un retour à la ligne entre chaque nombre
// (“<br />”) et en remplaçant certains nombres par un mot selon les conditions suivantes :
// Si le nombre est un multiple de 3, affichez “Fizz”.
// Si le nombre est un multiple de 5, affichez “Buzz”.
// Si le nombre est un multiple de 3 et de 5, affichez “FizzBuzz”.



// Parcourir les nombres de 1 à 100 en mettant un retour à la ligne entre chaque nombre
// lors de la boucle, SI le nombre est un multiple de 3, affichez “Fizz”.
// lors de la boucle, SI le nombre est un multiple de 5, affichez “Buzz”.
// SI le nombre nest pas un multiple de 3, ni un multiple de 5, ni les deux à la fois, afficher normallement le nombre. 
// fait un retour à la ligne







// Parcourir les nombres de 1 à 100 en mettant un retour à la ligne entre chaque nombre
for ($i = 1; $i <= 100; $i++) 
{

// lors de la boucle, SI le nombre est un multiple de 3, affichez “Fizz”.  
if ($i % 3==0 && $i % 5 !=0)
{
     echo"Fizz<br/>";
}

// lors de la boucle, SI le nombre est un multiple de 5, affichez “Buzz”.
elseif ($i %5 ==0 && $i % 3 !=0)
{
    echo"Buzz<br/>";
}
   
// SI le nombre nest pas un multiple de 3, ni un multiple de 5, ni les deux à la fois, afficher normallement le nombre. 
elseif ($i % 3==0 && $i % 5==0) 
{
    echo"FizzBuzz<br/>";
}

else
    {
       echo "$i . <br/>";
    } 

}
























?>