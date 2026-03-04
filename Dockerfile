# Utiliser une image PHP officielle avec Apache
FROM php:8.2-apache

# Activer le module rewrite d'Apache (utile pour le routage si besoin)
RUN a2enmod rewrite

# Copier les fichiers du projet dans le dossier racine d'Apache
COPY . /var/www/html/

# Donner les bonnes permissions aux fichiers
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Configurer le serveur mail pour que la fonction mail() de PHP fonctionne (optionnel mais recommandé pour contact.php)
# Note: Pour un vrai déploiement, il vaut mieux utiliser une librairie comme PHPMailer avec un SMTP externe.
# Ici on installe sendmail pour une configuration basique.
RUN apt-get update && apt-get install -y sendmail libpng-dev \
    && docker-php-ext-install gd

# Exposer le port 80
EXPOSE 80

# Lancer Apache en premier plan
CMD ["apache2-foreground"]
