FROM public.ecr.aws/ubuntu/ubuntu:22.04_stable

ENV DEBIAN_FRONTEND=noninteractive

# Basic
## Locale
RUN apt-get update && apt-get install -y locales && rm -rf /var/lib/apt/lists/* \
    && localedef -i en_US -c -f UTF-8 -A /usr/share/locale/locale.alias en_US.UTF-8
ENV LANG en_US.utf8
## Timezone
RUN apt-get update && apt-get install -y tzdata
RUN cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime
## Packages
RUN apt-get update && apt-get install -y make git unzip software-properties-common curl tzdata vim

# Nginx
RUN apt-get update && apt-get install -y nginx
COPY ./docker/nginx/nginx.conf /etc/nginx/nginx.conf
COPY ./docker/nginx/app.conf /etc/nginx/sites-enabled/default

# PHP
RUN add-apt-repository ppa:ondrej/php && apt-get update \
    && apt-get install --yes php8.2 php8.2-mbstring php8.2-fpm php8.2-dom php8.2-curl php8.2-mysql
RUN ln -s /usr/sbin/php-fpm8.2 /usr/sbin/php-fpm && mkdir /run/php && chmod 777 /run/php
COPY ./docker/php/php-fpm.conf /etc/php/8.2/fpm/php-fpm.conf
COPY ./docker/php/www.conf /etc/php/8.2/fpm/pool.d/www.conf
COPY ./docker/php/app-prod.ini /etc/php/8.2/mods-available/app.ini
RUN ln -s /etc/php/8.2/mods-available/app-prod.ini /etc/php/8.2/cli/conf.d/99-app.ini \
    && ln -s /etc/php/8.2/mods-available/app-prod.ini /etc/php/8.2/fpm/conf.d/99-app.ini

# Composer
# versions: https://github.com/composer/composer/releases
ARG COMPOSER_VERSION=2.5.8
RUN curl -sSfLO https://github.com/composer/composer/releases/download/$COMPOSER_VERSION/composer.phar \
    && chmod +x composer.phar \
    && mv composer.phar /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /opt/composer
ENV PATH $PATH:/opt/composer/vendor/bin

# App
COPY .. /opt/app/
WORKDIR /opt/app
RUN chmod 777 ./bootstrap/cache \
    && find storage -type d | xargs chmod 777
