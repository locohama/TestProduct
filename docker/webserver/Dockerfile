FROM php:7.4.6-apache-buster
COPY apache-conf.conf /etc/apache2/sites-available/000-default.conf
COPY php.ini /usr/local/etc/php/
RUN a2enmod rewrite

#postgresql driver
RUN apt-get update -qq && \
    apt-get install --no-install-recommends -y libpq-dev libonig-dev git gnupg zip unzip && \
    apt-get clean && \
    rm -rf /var/cache/apt
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
RUN echo "ServerName localhost" | tee /etc/apache2/conf-available/fqdn.conf
RUN a2enconf fqdn
RUN docker-php-ext-install mbstring pdo_pgsql bcmath
RUN curl -sL https://deb.nodesource.com/setup_11.x | bash -
RUN apt-get install -y nodejs
RUN npm install npm@latest -g

