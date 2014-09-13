#!/bin/bash

sudo su
apt-get update

# Install apache, php, and mysql
apt-get -y install apache2
apt-get -y install php5
echo "ServerName localhost" >> /etc/apache2/apache2.conf
/etc/init.d/apache2 restart

# Setup www files
if [ ! -h /var/log/www ];
then
    a2enmod rewrite
    sed -i '/AllowOverride None/c AllowOverride All' /etc/apache2/sites-available/default
    service apache2 restart
    touch /var/log/www
fi
