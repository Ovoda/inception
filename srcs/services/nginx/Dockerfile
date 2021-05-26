FROM	debian:buster

RUN 	apt update -y && apt install -y nginx
RUN	mkdir /run/php/ && touch /run/php/php7.3-fpm.sock && chmod 666 /run/php/php7.3-fpm.sock

COPY	nginx.conf /etc/nginx/nginx.conf 

EXPOSE	80

CMD 	["nginx", "-g", "daemon off;"]
