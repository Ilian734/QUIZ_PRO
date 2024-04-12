<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartBike</title>

    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            padding-top: 0; /* Supprimer l'espace entre le haut du site et le header */

        }

        header {
            background-image: linear-gradient(to right top, #78d16b, #00cf9d, #00c7cc, #00bbed, #00a9f5, #00a9f8, #00a9fb, #00a9fe, #00bcfe, #00cbe0, #00d4a9, #10d864);
            text-align: center;
            padding: 30px 0; /* ajout de padding */
            width: 100%; /* Utiliser toute la largeur */
            top: 0; /* Fixer en haut de la fenêtre */
            z-index: 1000; /* Assurer que le header soit au-dessus des autres éléments */
            border-bottom: 5px solid #333; /* Ajout d'une bordure en bas */
            text-transform: uppercase; /* Mettre le texte en majuscules */
        }

        .logo-container {
            margin-top: 20px; /* Espacement du haut */
        }

        .logo-container img {
            max-width: 300px; /* Agrandissement du logo */
            margin-bottom: 20px; /* Espacement du bas du logo */
        }

        nav {
            display: flex;
            align-items: center;
            justify-content: center; /* Centrer les éléments horizontalement */
            animation: slideInDown 0.5s ease; /* ajout d'animation */
            margin-top: 20px; /* Espacement entre le logo et les liens */
        }

        nav a {
            text-decoration: none;
            color: #ecf0f1; 
            font-weight: bold;
            font-size: 18px; 
            transition: color 0.3s; 
            margin: 0 30px; /* Espacement horizontal entre les liens */
        }

        nav a:hover {
            color: #3498db;
        }

        /* Animation de slideInDown */
        @keyframes slideInDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>
    
<body>

<header>
    <div class="logo-container">
        <img src="./images/logosite.png" alt="Logo du site">
    </div>
    <nav>
        <a href="?page=accueil" >Accueil</a>
        <a href="?page=themes" >Themes</a>
        <a href="?page=qsn" >Qui sommes nous</a>
        <a href="?page=contact" >Contact</a>
        <a href="?page=moncompte" >Mon compte</a>
    </nav>
</header>

</body>
</html>
