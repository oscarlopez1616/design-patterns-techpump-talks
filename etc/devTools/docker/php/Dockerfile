FROM php:7.4.4-fpm
WORKDIR "/application"
ENV XDEBUG_VERSION xdebug-2.9.4

#in order to install soap, provisional fix
RUN rm /etc/apt/preferences.d/no-debian-php
RUN apt-get update && apt-get install -y git unzip openssl procps acl libzip-dev libmcrypt-dev libsodium-dev libxml2-dev php-soap

# Install extensions
RUN docker-php-ext-install pdo pdo_mysql bcmath zip sodium soap pcntl

#INSTALL PCNTL
RUN docker-php-ext-configure pcntl --enable-pcntl

#INSTALL MCRYPT
RUN pecl install -f mcrypt
RUN docker-php-ext-enable mcrypt

# Install Redis extension
RUN pecl install -o -f redis && rm -rf /tmp/pear && docker-php-ext-enable redis

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer --version

# Install xdebug
RUN pecl install ${XDEBUG_VERSION} && docker-php-ext-enable xdebug
RUN echo 'xdebug.remote_port=9000' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo 'xdebug.remote_enable=1' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo 'xdebug.remote_connect_back=1' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo 'xdebug.idekey="PHPSTORM"' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo 'xdebug.profiler_enable=0' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo 'xdebug.profiler_enable_trigger=1' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo 'xdebug.profiler_output_dir="/application/pornmarathon.com/profiler"' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo 'xdebug.profiler_enable_trigger="cachegrind.out.%p"' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

#install python and rabbitmqadmin
RUN apt install -y python3
RUN apt install -y python-mysqldb
RUN apt install -y python-pip
RUN pip install requests
RUN pip install PyMySQL

#install ansible
RUN apt install -y ansible
RUN ansible-galaxy install ansistrano.deploy ansistrano.rollback;

# Install java
RUN mkdir -p /usr/share/man/man1
RUN apt install default-jre -y

# Install git
RUN apt-get update \
    && apt-get -y install git ssh openssh-client \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
