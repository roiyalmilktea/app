#!/usr/bin/bash

docker stop xss-nginx-1 xss-php-1 xss-phpmyadmin-1
docker rm xss-nginx-1 xss-php-1 xss-phpmyadmin-1

docker-compose up -d --build
docker-compose up -d
