# FROM php:fpm
FROM php:8-apache
# パッケージリスト更新後にパッケージをインストール
RUN apt-get update && apt-get install -y git zip unzip
# COPY . /usr/src/myapp
COPY . /var/www/html
# composerのインストール
COPY --from=composer /usr/bin/composer /usr/bin/composer
WORKDIR /var/www/html

# RUN composer update
