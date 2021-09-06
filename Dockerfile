FROM php:7-fpm

MAINTAINER "duck." <me@duck.moe>

ARG APP_VERSION
ENV APP_VERSION ${APP_VERSION}
ENV PATH="$PATH:/var/www/vendor/bin"

# install some dependencies / crap we need

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
    gnupg \
    && curl -sL https://deb.nodesource.com/setup_10.x | bash - \
    && apt-get install -y \
    nodejs \
    libfreetype6 libjpeg-dev libfreetype6-dev libpng-dev \
    libxrender1 \
    wget \
    git \
    nginx \
    supervisor \
    zip unzip

# notes:
#  NPROC is done so we build PHP extensions with all available cores, dramatically reducing compile time (especially for gd)
#  we grab prestissimo because it multi-threads composer downloads basically for free

RUN NPROC=$(grep -c ^processor /proc/cpuinfo 2>/dev/null || 1) \
    && docker-php-ext-install -j${NPROC} \
    bcmath \
    gd \
    mysqli \
    pdo_mysql \
    opcache \
    pcntl \
    && docker-php-ext-configure gd \
        --with-freetype \
        --with-jpeg \
    && ln -sf /dev/stdout /var/log/nginx/access.log \
    && ln -sf /dev/stderr /var/log/nginx/error.log \
    && chown -R www-data:www-data /var/lib/nginx \
    && chown -R www-data:www-data /var/www \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

# configuration
ADD ./docker/php.ini /usr/local/etc/php/conf.d/php-fpm.ini
ADD ./docker/supervisord.conf /etc/supervisord.conf
ADD ./docker/nginx.conf /etc/nginx/nginx.conf

# create app dir
RUN mkdir -p /var/www

# we copy some basic package management files here to cut down on layer changes
COPY ./composer.json ./composer.lock ./package.json ./webpack.mix.js /var/www/

WORKDIR /var/www

# needed to make autoloader work properly
COPY ./database /var/www/database

RUN /usr/bin/composer install --no-ansi --no-dev --no-interaction --no-progress --no-scripts --optimize-autoloader \
    # note: right now this is set to install dev dependencies only, as we need them to build sass and stuff
    # is this really the right thing to do in CI?
    && npm install --progress=false\
    && npm install --progress=false -g laravel-echo-server

COPY . /var/www/

# We don't generate a key because it's not needed as it turns out, but the line's commented here in case it ever does need to be
# RUN sed -i 's%APP_KEY%'$(cat /dev/urandom | tr -dc "a-zA-Z0-9" | fold -w 16 | head -n 1)'%g' /var/www/laravel-echo-server.json

RUN /usr/bin/npm run prod

RUN chown -R www-data:www-data \
        /var/www/storage \
    && chmod +x \
        /var/www/docker/launch.sh

EXPOSE 80

CMD /usr/bin/supervisord -c /etc/supervisord.conf
