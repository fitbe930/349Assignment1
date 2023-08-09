#!/bin/bash

apt-get update
apt-get install -y apache2 php libapache2-mod-php phpmysql

cp /vargrant/test-website.conf /etc/apache2/sites-available/

a2ensite test-website

a2dissite 000-default

service apache2 restart
