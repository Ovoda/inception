FROM debian:buster

RUN apt-get -y update && apt-get -y upgrade && apt-get -y install curl php php-mysql php-fpm php-curl php-gd php-intl php-mbstring php-soap php-xml php-xmlrpc php-zip dumb-init


RUN	mkdir -p srcs /run/php

RUN	echo "listen = 9000" >> /etc/php/7.3/fpm/pool.d/www.conf

EXPOSE	9000

ENTRYPOINT	["/usr/bin/dumb-init", "--"]

CMD	 ["/usr/sbin/php-fpm7.3", "-F"]
