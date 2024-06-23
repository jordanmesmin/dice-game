# Utiliser l'image officielle PHP comme image de base
FROM php:8.1-fpm

# Définir le répertoire de travail
WORKDIR /var/www/html

# Installer les dépendances
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libonig-dev \
    libzip-dev \
    sudo \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Nettoyer le cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Copier le contenu du répertoire de l'application existante
COPY . /var/www/html

# Copier les permissions du répertoire de l'application existante
COPY --chown=www-data:www-data . /var/www/html

# Exposer le port 9000 et démarrer le serveur php-fpm
EXPOSE 9000
CMD ["php-fpm"]
