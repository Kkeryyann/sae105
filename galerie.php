<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name=description content="Bienvenue sur la page de la galerie du site sur Bruno Mars dans le cadre de la SAE 105, vous trouverez sur cette page toutes les images ajoutées par vous-même ou d'autres personnes.">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <title>Galerie</title>
</head>
<body>
    <?php
        // Appel du bloc Header et du Menu
        require ('header.php');
    ?>
    <main>
        <h1>Galerie</h1>
        <?php
            if (isset($_SESSION['information'])) {
                echo '<p class="alert">'.$_SESSION['information'].'
                    <a href="galerie.php">
                        <svg class="alertClose" xmlns="http://www.w3.org/2000/svg" viewBox="0,0,256,256">
                            <g fill="#ffc946" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                            <g transform="scale(8.53333,8.53333)"><path d="M7,4c-0.25587,0 -0.51203,0.09747 -0.70703,0.29297l-2,2c-0.391,0.391 -0.391,1.02406 0,1.41406l7.29297,7.29297l-7.29297,7.29297c-0.391,0.391 -0.391,1.02406 0,1.41406l2,2c0.391,0.391 1.02406,0.391 1.41406,0l7.29297,-7.29297l7.29297,7.29297c0.39,0.391 1.02406,0.391 1.41406,0l2,-2c0.391,-0.391 0.391,-1.02406 0,-1.41406l-7.29297,-7.29297l7.29297,-7.29297c0.391,-0.39 0.391,-1.02406 0,-1.41406l-2,-2c-0.391,-0.391 -1.02406,-0.391 -1.41406,0l-7.29297,7.29297l-7.29297,-7.29297c-0.1955,-0.1955 -0.45116,-0.29297 -0.70703,-0.29297z"></path></g></g>
                        </svg>
                    </a>'.'</p>'."\n";
                echo '</div>';
                session_unset();
            }
        ?>
        <?php
            $nbFichiers = 0; // Initialize the count of files
            $dossier = opendir("images/galerie");
            while ($fichier = readdir($dossier)) {
                if ($fichier != "." && $fichier != "..") {
                    $nbFichiers++;
                }
            }

            closedir($dossier);

            //echo '<p class="alert"> Nous avons : '.$nbFichiers.' images.</p>'; // On verifie que le compte est bon, à supprimer/commenter ensuite
        ?>
        <form action="traitements/upload_image.php" method="post" enctype="multipart/form-data">
            <label for="image">Choisissez un fichier<span class="point">*</span></label>
            
            <input type="file" name="image" id="image">
            <input type="submit" value="Télécharger">

            <p class="info"><span class="point">*</span>Format .jpg ou .jpeg uniquement | 500 Ko maximum</p>
        </form>
        <div class="myDiv"></div>
        <div class="centrer">
            <?php
                // Vérifiez si une information est stockée dans la session
                if (!empty($_SESSION['information'])) {
                    echo $_SESSION['information'];
                    $_SESSION['information'] = ''; // Effacez l'information de la session après l'avoir affichée
                }


                for ($i = 1; $i <= $nbFichiers; $i++) {
                    echo '<img src="images/galerie/image' . $i . '.jpg" alt="Image ' . $i . '">' . "\n";
                }
            ?>
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
