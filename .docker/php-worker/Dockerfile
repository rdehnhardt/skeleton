FROM php:7.1-alpine

RUN apk --update add wget \
    libxml2-dev \
    curl-dev \
    libpng-dev \
    libjpeg-turbo-dev \
    libmcrypt-dev \
    postgresql-dev \
    freetype-dev \
    curl \
    git \
    build-base \
    libmemcached-dev \
    libmcrypt-dev \
    libxml2-dev \
    zlib-dev \
    autoconf \
    cyrus-sasl-dev \
    libgsasl-dev \
    supervisor

# Configure PHP extensions
RUN docker-php-ext-configure json && \
    docker-php-ext-configure session && \
    docker-php-ext-configure ctype && \
    docker-php-ext-configure tokenizer && \
    docker-php-ext-configure simplexml && \
    docker-php-ext-configure dom && \
    docker-php-ext-configure mbstring && \
    docker-php-ext-configure zip && \
    docker-php-ext-configure pdo && \
    docker-php-ext-configure pdo_mysql && \
    docker-php-ext-configure curl && \
    docker-php-ext-configure iconv && \
    docker-php-ext-configure xml && \
    docker-php-ext-configure phar && \
    docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/

# Build and install PHP extensions
RUN docker-php-ext-install \
    bcmath \
    json \
    session \
    calendar \
    ctype \
    tokenizer \
    simplexml \
    dom \
    mbstring \
    mcrypt \
    zip \
    pdo \
    pdo_mysql \
    pdo_pgsql \
    curl \
    iconv \
    xml \
    phar \
    pgsql \
    soap \
    gd

# Install Imagick
RUN apk add --update --no-cache autoconf g++ imagemagick-dev libtool make pcre-dev \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && apk del autoconf g++ libtool make pcre-dev

RUN rm /var/cache/apk/* && mkdir -p /var/www

COPY supervisord.conf /etc/supervisord.conf

ENTRYPOINT ["/usr/bin/supervisord", "-n", "-c",  "/etc/supervisord.conf"]

WORKDIR /etc/supervisor/conf.d/