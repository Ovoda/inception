FROM	debian:buster

RUN 	apt update -y && apt install -y nginx

COPY	./default /etc/nginx/sites-enabled/
COPY	./index.html /var/www/html/index.html

EXPOSE	80

CMD 	["nginx", "-g", "daemon off;"]
