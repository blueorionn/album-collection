# Stage 1: download dependencies
FROM composer:2 AS vendor

WORKDIR /app
COPY composer.json ./
RUN composer install --no-dev --optimize-autoloader

# Stage 2: build final PHP image
FROM php:8.2-apache

# Enable mod_rewrite and MySQL extension
RUN a2enmod rewrite \
    && docker-php-ext-install pdo pdo_mysql

# Suppress ServerName warning
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

WORKDIR /var/www/html

# Copy only the vendor directory from the builder
COPY --from=vendor /app/vendor ./vendor

# Copy the rest of your application
COPY . .

# Point Apache at your public/ folder
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' \
    /etc/apache2/sites-available/000-default.conf \
 && chown -R www-data:www-data /var/www/html

CMD ["apache2-foreground"]
