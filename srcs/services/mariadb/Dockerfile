FROM	debian:buster

RUN	apt-get update
RUN	apt-get install -y mariadb-server
RUN	echo "[mysqld]" > /etc/mysql/my.cnf 
RUN	echo "bind = 0.0.0.0" >> /etc/mysql/my.cnf
RUN	echo "port = 3306" >> /etc/mysql/my.cnf
RUN	mkdir /run/mysqld
RUN	touch /run/mysqld/mysqld.sock
RUN	chmod 666 /run/mysqld/mysqld.sock

EXPOSE	3306

CMD	["/usr/sbin/mysqld", "-u", "root"]
