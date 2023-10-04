
FROM php:latest


RUN docker-php-ext-install pdo_mysql


WORKDIR /var/www/html


COPY . /var/www/html/


EXPOSE 80


CMD ["php", "-S", "0.0.0.0:80"]
