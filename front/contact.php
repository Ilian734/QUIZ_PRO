<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  
    <title></title>
 
<style>
        
        .contact-container {
            position: absolute;
            top: 70%; /* Déplacer la section de contact plus bas */
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
            z-index: 1; /* Assurez-vous que la section de contact reste au-dessus de la barre de navigation */
        }
 
        .contact-container h1 {
            margin-bottom: 20px;
            color: #333333;
        }
 
        .contact-container p {
            margin-bottom: 20px;
            color: #666666;
        }
 
        .contact-form input[type="text"],
        .contact-form input[type="email"],
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
 
        .contact-form textarea {
            height: 150px;
        }
 
        .contact-form button {
            background-color: #1743e3;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
 
        .contact-form button:hover {
            background-color: #0f2ee5;
        }
 
       
       
 
    </style>
    <script>
        // JavaScript to display the contact section when the "Contact" link is clicked
        document.addEventListener("DOMContentLoaded", function() {
            var contactLink = document.querySelector('?page=contact');
            
            var contactSection = document.querySelector('.contact-container');
 
            contactLink.addEventListener('click', function(event) {
                event.preventDefault();
                contactSection.style.display = 'block';
            });
 
            var qsnLink = document.querySelector('?page=qsn');
            var qsnSection = document.querySelector('.about-container');
 
            qsnLink.addEventListener('click', function(event) {
                event.preventDefault();
                qsnSection.style.display = 'block';
            });
        });
    </script>
</head>
<body>
    
 
    <main class="contact-container" style="display: none;">
        <h1>Contactez-nous</h1>
        <p>Pour toute question ou demande d'information, n'hésitez pas à nous contacter :</p>
        <form class="contact-form">
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" placeholder="Votre nom" required>
 
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" required>
 
            <label for="probleme">Problème :</label>
            <textarea id="probleme" name="probleme" rows="5" placeholder="Expliquez votre problème ici" required></textarea>
 
            <button type="submit">Envoyer</button>
        </form>
    </main>
 
   
 
</body>
</html>