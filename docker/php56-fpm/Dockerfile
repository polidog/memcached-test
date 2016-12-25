FROM php:5.6-fpm

RUN apt-get update && apt-get install -y \
    git \
    unzip

# Set timezone
RUN rm /etc/localtime
RUN ln -s /usr/share/zoneinfo/Asia/Tokyo /etc/localtime
RUN "date"

# Install netstat
RUN apt-get install net-tools

# Install php-memcached-dev
RUN apt-get install -y libz-dev libmemcached-dev && \
    pecl install memcached && \
    docker-php-ext-enable memcached

RUN apt-get install -y libz-dev libmemcached-dev && \
    pecl install memcache && \
    docker-php-ext-enable memcache

