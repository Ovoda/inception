all:
	docker-compose -f ./srcs/docker-compose.yml up -d --build 
clean_i:
	docker rmi $(docker images -a)

clean_c:
	docker rm $(docker ps -aq)

clean: clean_i clean_c

re: clean all
