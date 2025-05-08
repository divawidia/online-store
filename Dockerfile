FROM serversideup/php:8.2-fpm

USER root

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libonig-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libicu-dev \
    libzip-dev \
    zlib1g-dev \
    zip \
    unzip \
    git \
    curl \
    && docker-php-ext-configure intl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        pdo \
        pdo_mysql \
        mbstring \
        zip \
        intl \
        exif \
        pcntl \
        gd \
        bcmath \
        opcache \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Node.js (change version if needed)
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/online-store

COPY . .

RUN composer install --no-dev --prefer-dist --optimize-autoloader --no-interaction --no-progress \
    && npm install \
    && npm run build

RUN chown -R www-data:www-data /var/www/online-store/storage /var/www/online-store/bootstrap/cache \
    && chmod -R 775 /var/www/online-store/storage /var/www/online-store/bootstrap/cache

USER www-data

EXPOSE 9000

CMD ["php-fpm"]