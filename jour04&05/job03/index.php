<?php 
/*Développez un algorithme qui affiche le nombre d’arguments $_POST.
Tips :
Pour tester votre code, créez un formulaire html <form> de type POST avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page par exemple :
“Le nombre d’argument POST envoyé est : “ */


var_dump($_POST);
$nombredargument = 0;

    foreach($_POST as $key => $value){
        $nombredargument++; 

    }


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
         <input type="text" name="nom" placeholder="nom">
        <input type="text" name="prenom" placeholder="prenom">
        <input type="text" name="sexe" placeholder="sexe"> 
        <input type="text" name="age" placeholder="age"> 
        <input type="submit" value="envoyer">

    </form>

    <?php echo $nombredargument; ?>
</body>
</html>