<?php
var_dump($_POST);


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>
<body>
    <ul>
        <li>Prenom : <?php echo $_POST["prenom"];  ?> </li>
        <li>Nom : <?php echo $_POST["nom"];  ?> </li>
    </ul>
</body>
</html>