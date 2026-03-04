<?php
    session_start();
    $_SESSION['information']='';

    // Vérification de l'appel via le formulaire
    if (count($_POST)==0) {
    	// Si le le tableau est vide, on affiche le formulaire
    	header('location: ../contact.php');
    }

    $affichage_retour = '';
    $erreurs=0;

    // Vérification des données du formulaire
    if (!empty($_POST['nom'])) {
        $nom=$_POST['nom'];
    } else {
        $affichage_retour .='Le champ NOM est obligatoire';
        $erreurs++;
    }

    
    if (!empty($_POST['prenom'])) {
        $prenom=$_POST['prenom'];
    } else {
        $affichage_retour .='Le champ PRENOM est obligatoire';
        $erreurs++;
    }

    
    if (!empty($_POST['message'])) {
        $message=$_POST['message'];
    } else {
        $affichage_retour .='Ce champ est obligatoire';
        $erreurs++;
    }


    if (!empty($_POST['radio'])) {
        $radio=$_POST['radio'];
    } else {
        $affichage_retour .='Veuillez cocher l\'une des 3 cases';
        $objet = $_POST['radio'];
        $erreurs++;
    }


    if (!empty($_POST['email'])) {
        // Si le champ email contient des données
  	    // Verification du format de l'email
      	if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
            $email=$_POST['email'];
        } else {
            // Si l'email est incorrect on retourne au formulaire
            $affichage_retour .='Adresse mail incorrecte, veuillez saisir une adresse mail valide';
            $erreurs++;
        }
    // Si le champ email est vide, on retourne au formulaire     
    } else {
        $affichage_retour .='Ce champ est obligatoire';
        $erreurs++;
    }


    // Récupération des données du formulaire
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $message=$_POST['message'];
    $email=$_POST['email'];
    $radio=$_POST['radio'];

    $prenom=mb_strtolower($prenom);
    $prenom=ucfirst($prenom);
    $nom=mb_strtolower($nom);
    $nom=ucfirst($nom);

    if ($erreurs ==0) {
        //Préparation des variables pour l'envoi du mail de contact
        $subject='SAE105 : Demande de '.$prenom.' '.$nom.' pour une '.$radio;
        $headers['From']="mmi23f01@mmi-troyes.fr";							// Pour pouvoir répondre à la demande de contact
        $headers['Reply-to']="no-reply@mmi-troyes.fr";						// On donne l'adresse de l'utilisateur comme adresse de réponse
        $headers['X-Mailer']='PHP/'.phpversion();			// On précise quel programme à généré le mail
        // On fixe l'adresse du destinataire - Pour ce Mail il s'agit de notre adresse MMI@mmi-troyes.fr
        $email_dest="mmi23f01@mmi-troyes.fr";

        $email2_dest=$email;
        $message2='Bonjour '.$prenom.' '.$nom.',
Nous avons bien reçu votre demande de contact pour une '.$radio.'
Nous vous répondrons dans les plus brefs délais.
Cordialement,
L\'équipe de maintenance de ce site.';

        //Préparation des variables pour l'envoi du mail de réception
        $subject2='SAE105 : Confirmation de votre demande de contact ';
    
        //Envoi du mail avec confirmation d'envoi (ou pas)
        if (mail($email_dest,$subject,$message,$headers) && mail($email2_dest,$subject2,$message2,$headers)) {
            echo "Mail de Contact OK";									// On confirme l'envoi du message
        } else {
            echo "Erreur d'envoi du mail de contact";					// Le message n'a pas été envoyé - Erreur de traitement
        }

        // Détermination du message à affichée après les tentatives d'envoi
        if ($erreurs == 0) {
            $affichage_retour='Votre demande a bien été envoyée';
        }
    
        if ($erreurs != 0 || $erreurs ++) {
            $affichage_retour='Echec de l\'envoi du message';
        }
    }

    $_SESSION['information']=$affichage_retour;
    header('location: ../contact.php');
?>