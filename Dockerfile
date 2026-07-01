FROM php:8.2-cli
WORKDIR /usr/src/app
COPY . .
EXPOSE $PORT
CMD php -S 0.0.0.0:$PORT -t .
