# Use the desired PHP base image
FROM php:8.1-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libzip-dev \
    libonig-dev \
    libxml2-dev \
    curl \
    unzip \
    zip

# Install PHP extensions
RUN docker-php-ext-install \
    pdo_mysql \
    mbstring \
    xml \
    curl \
    zip \
    gd \
    pgsql \
    bcmath \
    intl \
    bz2 \
    openssl \
    ffi \
    gmp

# Install Redis extension
RUN pecl install redis && docker-php-ext-enable redis

# Install Imagick extension if needed
# RUN pecl install imagick && docker-php-ext-enable imagick

# Copy your application code to the container
COPY . /var/www/html

# Set the working directory
WORKDIR /var/www/html

# Expose the container's port if needed
# EXPOSE 8000

# Start the PHP server
CMD ["php", "artisan", "serve", "--host=0.0.0.0"]