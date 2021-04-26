default: help

deps:
	composer install --prefer-dist
	php artisan key:generate
	composer dump-autoload
	php artisan cache:clear

help:
	@echo 'Available commands:'
	@echo '  make deps - install dependencies'
	@echo '  make help - show this message'
	@echo '  make init - init local settings'
	@echo '  make test - runs local test suite'
	@echo '  make docker - run docker compose for building containers'
	@echo '  make ddown - stop and deleting of all conatiners of app'

test:
	php artisan migrate:fresh --env=testing
	php artisan db:seed --env=testing
	php artisan test

init:	
	cp .env.example .env
	cp .env.testing.example .env.testing

docker:
	cd ../docker && docker-compose up --build -d
	docker exec lamp-php8 bash -c 'chmod -R 777 /var/www/app/storage'

ddown:
	cd ../docker && docker-compose down