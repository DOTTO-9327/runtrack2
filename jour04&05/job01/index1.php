<?php 
// Développez un algorithme qui affiche le nombre d’arguments $_GET.
//Tips : Pour tester votre code, créez un formulaire html <form> de type GET avec différents champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
// Vous pouvez ensuite afficher avec echo directement dans votre page par exemple : “Le nombre d’argument GET envoyé est : “

    var_dump($_GET);
    $nombredargument = 0;

    foreach($_GET as $key => $value){
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
    <form action="" method="get">
        <input type="text" name="nom" placeholder="nom">
        <input type="text" name="prenom" placeholder="prenom">
        <input type="text" name="sexe" placeholder="sexe"> 
        <input type="text" name="age" placeholder="age"> 
        <input type="submit" value="envoyer">

    </form>

    <?php echo "<p>Le nombre d'argument GET envoyé est : $nombredargument </p>" ?>

</body>
</html>