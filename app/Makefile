default: help

deps:
	composer install --prefer-dist

help:
	@echo 'Available commands:'
	@echo '  make deps - install dependencies'
	@echo '  make help - show this message'
	@echo '  make init - init local settings'
	@echo '  make test - runs local test suite'

test:
	php artisan migrate:fresh --env=testing
	php artisan db:seed --env=testing
	php artisan test

init:
	cp .env.example .env
	cp .env.testing.example .env.testing