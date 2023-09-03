#!/bin/bash

sudo apt update
sudo apt install -y apache2 php libapache2-mod-php php-mysql


cp /vagrant/web_website.conf /etc/apache2/sites-available/

a2ensite web_website

a2dissite 000-default

service apache2 restart
