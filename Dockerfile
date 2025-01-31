FROM php:7.1-apache

RUN apt-get update && apt-get install -y git-core cron \
  libjpeg-dev libmcrypt-dev libpng-dev libpq-dev \
  && rm -rf /var/lib/apt/lists/* \
  && docker-php-ext-configure gd --with-png-dir=/usr --with-jpeg-dir=/usr \
  && docker-php-ext-install gd mcrypt mysqli opcache pdo pdo_mysql zip

COPY .docker/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY entrypoint /usr/local/bin/entrypoint
COPY entrypoint /usr/local/bin/entrypoint

RUN chmod +x /usr/local/bin/entrypoint

RUN a2enmod rewrite

# Copy application source
COPY ./ /var/www/html
RUN chown -R www-data:www-data /var/www

CMD ["entrypoint"]
