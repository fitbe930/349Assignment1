#!/bin/bash

apt-get update

export MYSQL_PWD='password'

echo "mysql-server mysql-server/root_password password $MYSQL_PWD" | debconf-set-selections 
echo "mysql-server mysql-server/root_password_again password $MYSQL_PWD" | debconf-set-selections



apt-get -y install mysql-server

service mysql start

echo "CREATE DATABASE studs;" | mysql

echo "CREATE USER 'webuser'@'%' IDENTIFIED BY 'password';" | mysql

echo "GRANT ALL PRIVILEGES ON studs.* TO 'webuser'@'%'" | mysql

export MYSQL_PWD='password'

cat /vagrant/db_setup.sql | mysql -u webuser studs

sed -i'' -e '/bind-address/s/127.0.0.1/0.0.0.0/' /etc/mysql/mysql.conf.d/mysqld.cnf

service mysql restart






