<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" type ="text/css" href="css/styles.css">
<header>
    <div></div>
	<nav>
    	<ul>
        	<li <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'class="current"' : ''; ?>><a href="index.php">Accueil</a></li>
            <li <?php echo (basename($_SERVER['PHP_SELF']) == 'donnees.php') ? 'class="current"' : ''; ?>><a href="donnees.php">Données</a></li>
            <li <?php echo (basename($_SERVER['PHP_SELF']) == 'galerie.php') ? 'class="current"' : ''; ?>><a href="galerie.php">Galerie</a></li>
            <li <?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php') ? 'class="current"' : ''; ?>><a href="contact.php">Contact</a></li>
            <li <?php echo (basename($_SERVER['PHP_SELF']) == 'partenaires.php') ? 'class="current"' : ''; ?>><a href="partenaires.php">Partenaires</a></li>
        </ul>
    </nav>
</header>