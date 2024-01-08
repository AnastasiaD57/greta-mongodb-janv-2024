#!/usr/bin/env bash
apt update
apt upgrade
apt -y install net-tools wget zip dirmngr gnupg apt-transport-https software-properties-common ca-certificates curl

# installation mongodb serveur
curl -fsSL https://www.mongodb.org/static/pgp/server-4.2.asc | sudo apt-key add -
add-apt-repository 'deb https://repo.mongodb.org/apt/debian buster/mongodb-org/4.2 main'
apt update

# https://askubuntu.com/questions/1403619/mongodb-install-fails-on-ubuntu-22-04-depends-on-libssl1-1-but-it-is-not-insta

wget http://archive.ubuntu.com/ubuntu/pool/main/o/openssl/libssl1.1_1.1.1f-1ubuntu2_amd64.deb
dpkg -i libssl1.1_1.1.1f-1ubuntu2_amd64.deb
apt-get install -y mongodb-org