<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name=description content="Bienvenue sur la page de contact du site sur Bruno Mars dans le cadre de la SAE 105, vous trouverez sur cette page un formulaire de contact pour nous envoyer un message si vous souhaitez nous signler un problème ou alors nous soumettre une idée.">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <title>Contact</title>
</head>
<body>
    <?php
        // Appel du bloc Header et du Menu
        require ('header.php');
    ?>
    <main>
        <h1>Contact</h1>
        <p class="pcontact">Vous pouvez nous contacter via ce formulaire</p>
        <?php
            if (isset($_SESSION['information'])) {
                echo '<p class="alert">'.$_SESSION['information'].'
                    <a href="contact.php">
                        <svg class="alertClose" xmlns="http://www.w3.org/2000/svg" viewBox="0,0,256,256">
                            <g fill="#ffc946" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(8.53333,8.53333)"><path d="M7,4c-0.25587,0 -0.51203,0.09747 -0.70703,0.29297l-2,2c-0.391,0.391 -0.391,1.02406 0,1.41406l7.29297,7.29297l-7.29297,7.29297c-0.391,0.391 -0.391,1.02406 0,1.41406l2,2c0.391,0.391 1.02406,0.391 1.41406,0l7.29297,-7.29297l7.29297,7.29297c0.39,0.391 1.02406,0.391 1.41406,0l2,-2c0.391,-0.391 0.391,-1.02406 0,-1.41406l-7.29297,-7.29297l7.29297,-7.29297c0.391,-0.39 0.391,-1.02406 0,-1.41406l-2,-2c-0.391,-0.391 -1.02406,-0.391 -1.41406,0l-7.29297,7.29297l-7.29297,-7.29297c-0.1955,-0.1955 -0.45116,-0.29297 -0.70703,-0.29297z"></path></g></g>
                        </svg>
                    </a>'.'</p>'."\n";
                echo '</div>';
                session_unset();
            }
        ?>
        <form action="./traitements/envoi_mail.php" method="post">
            <div id="en-tete">
                <div>
                    <label for="prenom">Prénom<span class="point">*</span></label>
                    <input type="text" name="prenom" id="prenom" placeholder="Prénom" required>
                </div>
                <div>
                    <label for="nom">Nom<span class="point">*</span></label>
                    <input type="text" name="nom" id="nom" placeholder="Nom" required>
                </div>
            </div>
            <label for="email">E-mail<span class="point">*</span></label>
            <input type="text" name="email" id="email" placeholder="nom@domaine.fr" required>
          
            <div id="bloc-radio">
                <br>Précisez votre demande<span class="point">*</span> :
                <ul>
                    <li>
                        <div class="radio">
                            <input id="radio-info" name="radio" type="radio" value="information" required>
                            <label  for="radio-info" class="radio-label">Information</label>
                        </div>
                    </li>
                    <li>
                        <div class="radio">
                            <input id="radio-demande" name="radio" type="radio" value="demande de devis" required>
                            <label  for="radio-demande" class="radio-label">Demande de devis</label>
                        </div>
                    </li>
                    <li>
                        <div class="radio">
                            <input id="radio-recla" name="radio" type="radio" value="reclamation" required>
                            <label  for="radio-recla" class="radio-label">Réclamation</label>
                        </div>
                    </li>
                </ul>
            </div>
    
            <label for="message">Message<span class="point">*</span></label>
            <textarea name="message" id="message" placeholder="Votre message" required></textarea>

            <input type="submit" value="Envoyer">
            <span class="point">*</span>Champs obligatoires
        </form>
        <?php
            if (isset($_SESSION['information'])) {
                echo '<p>'.$_SESSION['information'].'</p>'."\n";
                session_unset();
            }
        ?>
    </main>
    <?php
        // Appel du Pied de Page
        require ('footer.php');
    ?>
</body>
</html>