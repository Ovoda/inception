FROM	debian:buster

RUN	mkdir /work_dir/

COPY	my.cnf /etc/mysql/my.cnf
COPY	. .

RUN	apt-get update
RUN	apt-get install -y mariadb-server mariadb-server dumb-init


EXPOSE	3306

ENTRYPOINT	["/usr/bin/dumb-init"]
CMD		["./setup_db.sh"]
