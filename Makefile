IMAGE	=	docker images -a

all:
	docker-compose -f ./srcs/docker-compose.yml up -d --build 
down:
	docker-compose -f ./srcs/docker-compose.yml down

clean_c:
	docker rm $(docker ps -aq)

clean: clean_i clean_c

re: clean all
