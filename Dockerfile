# FROM php:fpm
FROM php:8-apache
# パッケージリスト更新後にパッケージをインストール
RUN apt-get update && apt-get install -y git zip unzip
COPY . /usr/src/myapp
# composerのインストール
COPY --from=composer /usr/bin/composer /usr/bin/composer
WORKDIR /usr/src/myapp

# RUN composer require
