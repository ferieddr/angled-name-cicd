FROM php:7.4-cli
EXPOSE 8282
WORKDIR /usr/src/app
COPY ./src .
CMD ["php", "-S", "0.0.0.0:8282", "-t", "/usr/src/app", "/usr/src/app/index.php"]