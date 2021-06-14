#!/bin/bash
service mysql start
echo "CREATE DATABASE wordpress" | mysql -u root
echo "CREATE USER 'user'@'%';" | mysql -u root
echo "SET password FOR 'user'@'%' = password('password');" | mysql -u root
echo "GRANT ALL PRIVILEGES ON wordpress.* TO 'user'@'%' IDENTIFIED BY 'password';" | mysql -u root
echo "FLUSH PRIVILEGES" | mysql -u root
mysql wordress -u root < wordpress.sql
service mysql stop
/usr/sbin/mysqld -u root
