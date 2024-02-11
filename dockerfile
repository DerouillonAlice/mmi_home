# Utiliser l'image PHP officielle
FROM php:7.4-apache

# Ajouter la directive ServerName à la configuration Apache
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Copier le code PHP dans le répertoire de travail du serveur Apache

# COPY ./ /var/www/html/
VOLUME /var/www/html/

# Exposer le port 80 pour permettre l'accès à l'application
EXPOSE 80




# Commande par défaut pour démarrer Apache lorsque le conteneur démarre
CMD ["apache2-foreground"]
