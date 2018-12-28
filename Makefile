dcu:
	sudo docker-compose up -d

dcd:
	sudo docker-compose down

dcub:
	sudo docker-compose up --build -d

dcps:
	sudo docker-compose ps

test:
	sudo docker-compose exec php-fpm vendor/bin/phpunit --colors=always

own:
	sudo chown -R ${USER}:${USER} *
