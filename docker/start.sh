#!/bin/sh
docker-compose build --no-cache
docker-compose up -d
docker-compose exec test-web composer update --working-dir=/var/www
docker-compose exec test-web php /var/www/artisan migrate:refresh --seed
