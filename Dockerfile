FROM php:8.3-apache

# Instalar PDO y el driver de MySQL
RUN docker-php-ext-install pdo pdo_mysql

RUN a2enmod rewrite
