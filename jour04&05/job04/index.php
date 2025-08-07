<?php 

/* Développer un algorithme qui affiche dans un tableau HTML <table> l’ensemble des
arguments $_ POST et les valeurs associées. Il doit y avoir deux colonnes : argument et
valeur.
Tips :
Pour tester votre code, créez un formulaire html <form> de type POST avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page par exemple ce
tableau :

Argument Valeur
prenom Stephane
nom Dupont */

var_dump($_POST);

?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        th,td{
            border: 1px solid black;
        }
        
    </style>
    <form action="" method="post">
        <input type="text" name="nom" placeholder="nom">
        <input type="text" name="prenom" placeholder="prenom">
        <input type="text" name="sexe" placeholder="sexe"> 
        <input type="text" name="age" placeholder="age"> 
        <input type="submit" value="envoyer">

    </form>

    <table>
        <thead>
            <tr>
                <th>Argument</th>
                <th>Valeur</th>
            </tr>
        </thead>

        <tbody>
            <?php
                 foreach($_POST as $key => $value) 
                {
                    echo "<tr>"; 
                    echo "<td> $key </td> <td> $value </td>" ; 
                    echo "</tr>";

                }
            ?>
        </tbody>

    </table>

</body>
</html>