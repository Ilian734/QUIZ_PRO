<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/front/style.css">
    <style>

        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    color: white;
  
    overflow-x: hidden; 
    overflow-y: auto; 
    margin-top: 130px;
}

.header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 80px 1%;
    background-color:#f5c21a;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 100;
    transition: top 0.3s; 
    height: 30px;
}


.logo {
    font-size: 35px;
    text-decoration: none;
    border: 2px solid #fff;
    padding: 10px;
    background: linear-gradient(#222, #999);
    color: #fff;
    border-radius: 50%;
    font-weight: 600;
    text-shadow: 5px 5px 5px black;
    letter-spacing: 1px;
    text-transform: uppercase;
    animation: slideRight 1s ease forwards;
}

.navbar a {
    display: inline-block;
    font-size: 18px;
    color: #000000;
    text-decoration: none;
    font-weight: bold;
    text-transform: uppercase;
    margin: 10px 30px;
    margin-top: 10px;
    transition: .3s;
    animation: slideTop 1s ease forwards;
    animation-delay: calc(.2s * var(--i));
    z-index: 100;
}


.navbar a:hover,
.navbar a.active {
    color: #1743e3;
}

.search-container {
    text-align: center;
    margin-top: 200px; /* Ajustement de la marge supérieure de la barre de recherche */
}

.search-input {
    padding: 10px;
    width: 300px;
    border: none;
    border-bottom: 2px solid #fdb71f; /* Couleur de la bordure de la barre de recherche */
    font-size: 16px;
    outline: none;
}

.search-btn {
    padding: 10px 20px;
    background-color: #fdb71f;
    border: none;
    border-radius: 20px;
    color: white;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
}

.search-btn:hover {
    background-color: #0f2bd6;
}

.reseau {
    width: 150px;
    height: 40px;
    display: flex;
    justify-content: space-between;
}

.reseau a {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 40px;
    height: 40px;
    background: transparent;
    text-decoration: none;
    border: 2px solid transparent;
    transform: rotate(45deg);
    transition: .5s;
    border-radius: 50%;
    animation: slideSci .5s ease forwards;
    animation-delay: calc(.2s * var(--i));
}

.reseau a:hover {
    border-color: #222;
}

.reseau a i {
    font-size: 24px;
    color: #000;
    transform: rotate(-45deg);
}

.container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 80px;
    flex-direction: row;
    transition: margin-top 0.3s; 
}

.quiz-block {
    width:38%;
    margin: 10px;
    display: flex;
    flex-direction: column;
    padding: 20px;
    border: 5px solid #000000;
    align-items: center;
    max-height: 300px; 
    overflow: auto; 
    border-radius: 20px;
    background-color: #1a8784;
    text-decoration: none;
    color: inherit;
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

.banner {
    background-color: #1743e3;
    color: white;
    padding: 20px;
    text-align: center;
    margin-bottom: 20px;
}

.banner h1 {
    font-size: 36px;
    margin-bottom: 10px;
}

.banner p {
    font-size: 18px;
}

.featured-themes {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    margin-bottom: 40px;
}

.theme-card {
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin-top: 20px; 
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
}

.theme-card:hover {
    transform: translateY(-5px);
}

.theme-card img {
    width: 100%;
    height: auto;
    border-radius: 10px 10px 0 0;
}

.video-container {
    text-align: center;
    border: 2px solid #f5c21a; 
    border-radius: 10px;
    overflow: hidden;
}

.video-container video {
    max-width: 100%;
    height: auto;
    display: inline-block;
}

.theme-details {
    text-align: center;
    margin-top: 20px;
        }

.theme-title {
    font-size: 24px;
    margin-bottom: 10px;
}

.theme-description {
    font-size: 16px;
    color: #666;
    margin-bottom: 20px;
}

.theme-link {
    background-color: #1743e3;
    color: white;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s;
    display: inline-block;
}

.theme-link:hover {
    background-color: #0f2bd6;
}

.theme-card video {
    max-width: 50%; 
    height: auto; 
}


    </style>
    <title>QuizPRO</title>
</head>
<body>
    <main>
        <div class="search-container">
            <form action="/search" method="get">
              <input type="text" placeholder="Rechercher un thème" name="search" class="search-input">
              <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
            </form>
        </div>

        <div class="container">
            <div class="banner">
                <h1>Découvrez des quiz captivants sur divers thèmes!</h1>
                <p>Choisissez un thème qui vous intéresse et plongez dans l'univers des quiz.</p>
            </div>

            <div class="featured-themes">
                <div class="theme-card">
                    <div class="video-container">
                        <video autoplay loop muted>
                            <source src="./videos/theme1.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="theme-details">
                        <p class="theme-description">Testez vos connaissances en histoire mondiale avec nos quiz fascinants.</p>
                        <a href="?page=histoire" class="theme-link">Découvrir</a>
                    </div>
                </div>
            
                <div class="theme-card">
                    <div class="video-container">
                        <video autoplay loop muted>
                            <source src="./videos/theme2.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="theme-details">
                        <p class="theme-description">Êtes-vous un cinéphile? Testez vos connaissances sur les films et les stars du cinéma.</p>
                        <a href="?page=cinema" class="theme-link">Découvrir</a>
                    </div>
                </div>
            
                <div class="theme-card">
                    <div class="video-container">
                        <video autoplay loop muted>
                            <source src="./videos/theme3.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="theme-details">
                        <p class="theme-description">Explorez le monde à travers nos quiz de géographie et découvrez des faits intéressants sur les pays, les capitales et plus encore.</p>
                        <a href="?page=geo" class="theme-link">Découvrir</a>
                    </div>
                </div>
            </div>            
        </div>
    </main>
</body>
</html>
