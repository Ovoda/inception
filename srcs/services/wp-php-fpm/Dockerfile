FROM debian:buster

RUN apt-get -y update && apt-get -y upgrade && apt-get -y install curl php php-mysql php-fpm php-curl php-gd php-intl php-mbstring php-soap php-xml php-xmlrpc php-zip


RUN	mkdir srcs

COPY	. /srcs

WORKDIR	/srcs

EXPOSE	9000

ENTRYPOINT	 ["/etc/init.d/php7.3-fpm", "start"]
