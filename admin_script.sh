#!/bin/bash

sudo apt update

sudo apt install -y apache2 php libapache2-mod-php php-mysql

cp /vagrant/admin_website.conf /etc/apache2/sites-available/


sudo a2ensite admin_website

sudo a2dissite 000-default

sudo service apache2 restart
