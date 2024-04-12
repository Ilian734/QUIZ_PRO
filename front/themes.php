<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        /* CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            overflow-x: hidden;
            overflow-y: auto;
            margin-top: 130px;
            background-color: #f2f2f2;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 80px;
            flex-direction: row;
        }

        .quiz-block {
            width: 38%;
            margin: 10px;
            display: flex;
            flex-direction: column;
            padding: 20px;
            border: 5px solid #000000;
            align-items: center;
            max-height: 300px;
            overflow: auto;
            border-radius: 20px;
            background-image: linear-gradient(to left top, #e90487, #d42da0, #b943b3, #9a54c1, #7560c8, #9261c3, #a964bc, #bb68b6, #e97299, #fb8c7d, #f6b071, #e2d37e);
            text-decoration: none;
            color: inherit;
            transition: background-image 0.3s, transform 0.3s; /* Ajout de la transition */
        }

        .quiz-block:hover {
            background-color: #155e5b;
            transform: translateY(-5px); /* Ajout du décalage vers le haut */
        }

        .quiz-block img {
            display: block;
            width: 40%;
            margin-bottom: 5px;
        }

        .page-title {
            text-align: center;
            margin-bottom: 40px;
            width: 100%;
        }

        @media only screen and (max-width: 768px) {
            .quiz-block {
                width: 90%;
            }
        }
    </style>
    <title>Votre titre</title>
</head>

<body>

    <div class="container">
        <a href="?page=culture" class="quiz-block">
            <img src="./images/culture.png" alt="Culture" width="40px">
            <span>CULTURE</span>
        </a>
        <a href="?page=musique" class="quiz-block">
            <img src="./images/musique.png" alt="Musique" width="40px">
            <span>MUSIQUE</span>
        </a>
        <a href="cinema.html" class="quiz-block">
            <img src="./images/cinema.png" alt="Cinema" width="40px">
            <span>CINÉMA</span>
        </a>
        <a href="sport.html" class="quiz-block">
            <img src="./images/sports.png" alt="Sport" width="40px">
            <span>SPORT</span>
        </a>
        <a href="sciences.html" class="quiz-block">
            <img src="./images/sciences.png" alt="Sciences" width="40px">
            <span>SCIENCES</span>
        </a>
        <a href="celebrite.html" class="quiz-block">
            <img src="./images/celeb.png" alt="Célébrité" width="40px">
            <span>CÉLÉBRITÉ</span>
        </a>
        <a href="voiture.html" class="quiz-block">
            <img src="./images/voiture.png" alt="Voiture" width="40px">
            <span>VOITURE</span>
        </a>
        <a href="mode.html" class="quiz-block">
            <img src="./images/mode.png" alt="Mode" width="40px">
            <span>MODE</span>
        </a>
        <a href="histoire.html" class="quiz-block">
            <img src="./images/histoire.png" alt="Histoire" width="40px">
            <span>HISTOIRE</span>
        </a>
        <a href="geographie.html" class="quiz-block">
            <img src="./images/geo.png" alt="Géographie" width="40px">
            <span>GÉOGRAPHIE</span>
        </a>
    </div>
</body>

</html>
