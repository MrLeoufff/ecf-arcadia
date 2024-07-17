FROM php:8.3-apache
LABEL authors="René"

# Installer les extensions PHP nécessaires
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libicu-dev \
    libonig-dev \
    libxslt1-dev \
    zip \
    unzip \
    git \
    wget \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && docker-php-ext-install intl \
    && docker-php-ext-install mbstring \
    && docker-php-ext-install opcache \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install bcmath \
    && docker-php-ext-install xsl \
    && docker-php-ext-enable opcache \
    && pecl install mongodb \
    && docker-php-ext-enable mongodb

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Installer Symfony CLI
RUN wget https://get.symfony.com/cli/installer -O - | bash \
    && mv /root/.symfony*/bin/symfony /usr/local/bin/symfony

# Copier les fichiers de l'application
COPY . /var/www/html

# Installer les dépendances Composer
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Configurer les permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Activer les modules Apache nécessaires
RUN a2enmod rewrite

# Exposer le port 80
EXPOSE 80

# Démarrer Apache
CMD ["apache2-foreground"]
