cp php-fpm.conf /etc/php/7.3/fpm/php-fpm.conf
apt isntall -y vim
/etc/init.d/php7.3-fpm start
/etc/init.d/php7.3-fpm reload 
/etc/init.d/php7.3-fpm status
service --status-all
tail -f /var/log/php7.3-fpm.log
tail -f
