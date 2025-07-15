<?php
    $booleen= true;

    $age= 30; 

    $titre= "LaPlateforme";

    $float= 10.10;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job03</title>
</head>

<body>
    <link rel="stylesheet" href="style.css">
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
            
        <tbody>
            <tr>
                <td><!-- type -->boolean</td>
                <td><!--nom-->booleen</td>
                <td><!--valeur-->true</td>
            </tr>

            <tr>
                <td><?php echo gettype($age); ?></td>
                <td>age</td>
                <td><?php echo $age;?></td>
            </tr>

            <tr>
                <td><?php echo gettype($titre); ?></td>
                <td>titre</td>
                <td><?php echo $titre; ?></td>
            </tr>

            <tr>
                <td><?php echo gettype($float); ?></td>
                <td>float</td>
                <td><?php echo $float; ?></td>
            </tr>
        </tbody>
    </table>
    
</body>
</html>