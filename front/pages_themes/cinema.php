<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/front/pages_themes/pages.css">
    <title>LocExpress</title>
</head>
<body>
    <main class="main">
     
    
    <div class="container-quiz">
        <section class="quiz-section">

          
             <div class="quiz-box">
                <h1>Quiz</h1>
                <div class="quiz-header">
                    <span class="question-total">Question 1 / 5 </span>
                    <span class="header-score">Score: 0 / 5</span>
                </div>
                <h2 class="question-text">Le model "z1" appartient à quel marque de voiture ?</h2>

                 <div class="option-list">

                    <!-- <div class="option">
                        <span>A. Mercedes</span>
                    </div>

                    <div class="option">
                        <span>B. Porsche</span>
                    </div>

                    <div class="option">
                        <span>C. Peugeot</span>
                    </div>

                    <div class="option">
                        <span>D. BMW</span>
                    </div> -->
                </div> 
                <div class="quiz-footer">
                    <div id="countdown">Temps restant : 10</div>
                    <button class="next-btn" id="startButton2">Suivant</button>

                </div>
            </div>

                 <div class="result-box">
                    <h2>Quiz Result !</h2>

                    <div class="percentage-container">
                        <div class="circular-progress">
                            <span class="progress-value">0%</span>
                        </div>
                        
                        <span class="score-text">Votre Score : 0 / 5</span>
                    </div>

                    <div class="buttons">
                        <button class="restart-btn">Restart</button>
                        <button class="retour-accueil-btn">Retour</button>
                    </div>
                </div> 

        </section> 

    
    
    
    
        
        <section class="home">
    <div class="popup-info">
        <h2>C'est parti !</h2>
        <img src="./images/cinema.jpg" alt="sport" width="100%">
        <p class="info">Bienvenue sur notre quiz</p>
<p class="info">Plongez dans l'univers du cinéma avec notre quiz captivant !</p>
<p class="info">Testez vos connaissances sur vos films préférés et découvrez des anecdotes passionnantes.</p>
<p class="info">Que les projecteurs s'allument, que le spectacle commence ! 🎬</p>
        
        <div class="btn-group">
            <a href="?page=themes">
                <button class="info-btn btn-exit">Retour</button>
            </a>
            <button class="info-btn btn-continue" id="startButton">Continue</button>
        </div>
    </div>
   
</section>

<div id="message"></div>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <p>Temps écoulé !</p>

            <div class="buttons-modal">
            <button class="restart-btn2">Restart</button>
            <button class="retour-accueil-btn2" onclick="closeModal()">Retour</button>
            </div>
        </div>
    </div>


</div>
</main>

    <script src="/front/questions/qCinema.js"></script>
    <script src="/front/script.js"></script>
</body>
</html>