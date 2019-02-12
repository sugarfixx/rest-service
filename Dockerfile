FROM alpine:3.8
LABEL Maintainer="itorsrud <itorsrud@nepgroup.com>" \
      Description="Lightweight container with Composer, Nginx 1.14 & PHP-FPM 7.2 based on Alpine Linux."

# Install packages
RUN apk --no-cache add php7 php7-fpm php7-json php7-openssl php7-curl php7-tokenizer php7-pdo_mysql \
    php7-zlib php7-xml php7-phar php7-intl php7-dom php7-xmlreader php7-xmlwriter php7-ctype \
    php7-mbstring php7-gd nginx supervisor curl zip vim

# Configure nginx
COPY config/nginx.conf /etc/nginx/nginx.conf

# Configure PHP-FPM
COPY config/fpm-pool.conf /etc/php7/php-fpm.d/zzz_custom.conf
COPY config/php.ini /etc/php7/conf.d/zzz_custom.ini

# Configure supervisord
COPY config/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Create application diractory
# RUN mkdir -p /var/www/html
# WORKDIR /var/www/html

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer && composer global require hirak/prestissimo --no-plugins --no-scripts
# COPY composer.json composer.json
" COPY composer.lock composer.lock
# RUN composer install --prefer-dist --no-scripts --no-dev --no-autoloader && rm -rf /root/.composer

# Move and build application
COPY ./ /var/www/html/
RUN composer dump-autoload --no-scripts --no-dev --optimize
RUN php artisan migrate
RUN php artisan db:seed

EXPOSE 80 443
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
