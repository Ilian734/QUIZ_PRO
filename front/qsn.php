<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   
    <title>LocExpress</title>
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
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            width: 80%;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
            animation: slideInDown 1s ease-in-out;
        }

        p {
            color: #666;
            font-size: 16px;
            line-height: 1.6;
            animation: slideInUp 1s ease-in-out;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideInDown {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
    <title>Votre titre</title>
</head>
    <script>
        // JavaScript to display the about section when the "Qui sommes-nous ?" link is clicked
        document.addEventListener("DOMContentLoaded", function() {
            var qsnLink = document.querySelector('a[href="./front/qsn.php"]');
            var qsnSection = document.querySelector('.about-container');
   
            qsnLink.addEventListener('click', function(event) {
                event.preventDefault();
                qsnSection.style.display = 'block';
            });
        });
    </script>
</head>
<body>
    
<div class="container">
        <main class="about-container">
            <h1>Qui sommes-nous ?</h1>
            <p>Bienvenue sur QuizPro ! Nous sommes une équipe passionnée par les jeux de quiz, déterminée à offrir une expérience divertissante et enrichissante à nos utilisateurs.</p>
           
            <h2>Notre Mission</h2>
            <p>Créer un espace où les amateurs de quiz de tous âges et de tous horizons peuvent se rassembler, se divertir et tester leurs connaissances dans une variété de thèmes captivants.</p>
           
            <h2>Ce que nous offrons</h2>
            <p>Une collection de quiz variés, allant de la culture générale à des sujets plus spécifiques, pour satisfaire les intérêts de chacun.</p>
           
            <h2>Notre Équipe</h2>
            <p>Composée de créateurs de contenu dévoués et de développeurs talentueux, unis par notre amour pour les jeux intellectuels et notre désir de fournir une plateforme de quiz exceptionnelle.</p>
           
            <h2>Notre Engagement envers la Communauté</h2>
            <p>Nous valorisons les commentaires et suggestions de nos utilisateurs pour améliorer constamment notre site et offrir des quiz encore plus passionnants et engageants.</p>
           
            <h2>Joignez-vous à Nous</h2>
            <p>Rejoignez-nous dans cette aventure stimulante du savoir et du divertissement. Parcourez nos quiz, défiez vos amis, et découvrez à quel point le monde du savoir peut être passionnant et amusant.</p>
           
            <p>Merci de faire partie de la communauté [Nom de votre site] !</p>
        </main>

        </div>
   
</body>
</html>
 