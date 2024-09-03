FROM php:8.3-cli

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y --no-install-recommends \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    unzip \
    libzip-dev \
    vim \
    git \
    curl \
    supervisor \
    unixodbc-dev \
    gcc \
    g++ \
    make \
    default-libmysqlclient-dev \
    libicu-dev \
    libpq-dev \
    nginx \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql gd zip intl pdo_pgsql pgsql \
    && curl -fsSL https://deb.nodesource.com/setup_16.x | bash - \
    && apt-get install -y --no-install-recommends nodejs \
    && pecl install pdo_sqlsrv \
    && pecl install sqlsrv \
    && docker-php-ext-enable pdo_sqlsrv \
    && docker-php-ext-enable sqlsrv \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

RUN mkdir -p /var/log/supervisord

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . /var/www/html
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY nginx.conf /etc/nginx/sites-available/default

RUN composer install --optimize-autoloader --no-dev --prefer-dist --no-progress

RUN npm install --production --silent && npm cache clean --force

RUN chown -R www-data:www-data /var/www/html/storage/app/public \
    && chmod -R 755 /var/www/html/storage/app/public

EXPOSE 8080 8001

CMD ["/usr/bin/supervisord"]
