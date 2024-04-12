<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titre de votre site</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('./images/fondsite2.jpg'); 
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <?php
    include("front/header.php");
    include("serveur/routeur.php");
    include("front/footer.php");
    ?>
</body>

</html>
