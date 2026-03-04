<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Accueil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bienvenue sur la page d'acceuil du site sur Bruno Mars dans le cadre de la SAE 105">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type ="text/css" href="css/styles.css">
</head>
<body>
    <?php
        // Appel du bloc Header et du Menu
        require ('header.php');
    ?>
    <div class="container">
        <img src="images/bruno_mars.jpg" alt="bannière image de Bruno Mars en little Elvis">
        <div class="text"> </div>
    </div>
    <main>
        <h1>Qui est Bruno Mars ?</h1>
        <div class="story">
            <img src="images/little_elvis.jpg" alt="image de Bruno Mars enfant">
            <p>
                De son vrai nom Peter Hernandez, Bruno Mars est un chanteur et producteur d'origine Hawaïenne né le 8 Octobre 1985.<br>
                Connu mondialement pour ses multiples succès musicaux, il se démarque par son style musical unique qu'il a importé de différents autres styles musicaux comme le Rock, la Funk, le Hip-Hop, le Reggae, la R&B, la Soul ou encore la POP.<br>
                Bruno Mars s'est lancé très tôt dans la musique puisque l'éducation musicale qu'il a reçue lui a permis de se propulser très vite sur les devants de la scène.<br>
                En effet, depuis son plus jeune âge, il est surnommé "Little Elvis".
            </p>
        </div>
        <div class="story">
            <p>
                Lorsqu'il obtient son diplôme en 2003, il décide de déménager à Los Angeles et de débuter sa carrière musicale.<br>
                Il a su convaincre des grands noms de la musique tels que Brandy, Flo Rida ou encore Maroon 5 à le prendre en tant que producteur.<br>
                C'est ainsi qu'il va se faire connaître aux yeux du grand public avec le titre de B.o.B "Nothin' on you" en 2010, mais également avec Travis McCoy avec le titre "Billionaire".<br>
            </p>
            <img src="images/bob_and_bruno_marsnb.jpg" alt="image de B.o.B et Bruno Mars en concert">
        </div>
        <div class="story">
            <img src="images/bruno_mars2nb.jpg" alt="image de Bruno Mars (Collaboration avec Lacoste)">
            <p>
                Bruno Mars va continuer sa carrière qui connaîtra quelques zones d'ombre comme plusieurs zones de lumière.<br>
                Aujourd'hui, sa carrière continue, il a sorti 4 albums, détient :<br> -18 singles d'Or,<br> -92 singles de Platine<br> -5 singles de Diamant.
            </p>
        </div>
    </main>
    <div class="btn">
        <img src="images/fleche.png" alt="flèche vers le haut">
    </div>
    <?php
        // Appel du Pied de Page
        require ('footer.php');
    ?>
    <script src="js/script.js"></script>
</body>
</html>