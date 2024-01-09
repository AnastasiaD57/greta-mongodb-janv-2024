#!/usr/bin/env bash

apt-get update
apt-get install vim curl build-essential python-software-properties git

sudo apt install ca-certificates apt-transport-https software-properties-common lsb-release -y

sudo add-apt-repository ppa:ondrej/php -y

sudo apt update
sudo apt upgrade

yes Y | sudo apt -y install php8.2 php8.2-cli php8.2-common php8.2-mysql php8.2-zip php8.2-curl php8.2-gd php8.2-mbstring php8.2-xml php8.2-bcmath php8.2-bz2 php8.2-intl

yes Y | sudo apt -y  install php8.2-xdebug php8.2-pcov php8.2-dev

yes Y | apt-get -y install libapache2-mod-php8.2 apache2 a2enmod rewrite

sed -i "s/AllowOverride None/AllowOverride All/g" /etc/apache2/apache2.conf

# sed -i "s/error_reporting = .*/error_reporting = E_ALL/" /etc/php/7.0/apache2/php.ini
# sed -i "s/display_errors = .*/display_errors = On/" /etc/php/7.0/apache2/php.ini

service apache2 restart
