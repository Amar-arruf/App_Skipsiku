# images
FROM php:8.1-apache


ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# pindahkan kode project ke direktori kerja Apache
COPY . /var/www/html

# atur directory kerja di the container
WORKDIR /var/www/html

# install dependencies
RUN docker-php-ext-install mysqli
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libzip-dev \
    && docker-php-ext-install \
    intl \
    zip 

# Install required system dependencies for the gd extension
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

# Install Composer and run it with necessary environment variables
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && export COMPOSER_ALLOW_SUPERUSER=1 \
    && composer install --no-dev --optimize-autoloader



# konfigurasi Apache
RUN a2enmod rewrite

# Mengubah kepemilikan file
RUN chown -R www-data:www-data /var/www/html/

#expose
EXPOSE 80

# Define the entry point for the container
CMD ["apache2-foreground"]