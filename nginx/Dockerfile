FROM php:8.2-fpm

# Installer les dépendances nécessaires pour pdo_pgsql
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Définir le dossier de travail
WORKDIR /var/www/html

# Copier le code
COPY . /var/www/html
