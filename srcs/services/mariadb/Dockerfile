FROM	debian:buster

RUN	apt-get update
RUN	apt-get install -y mariadb-server 
RUN 	mkdir /var/run/mysqld 

EXPOSE	3306

CMD	["mysqld_safe"]
