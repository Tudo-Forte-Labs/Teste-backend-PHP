# Desafio técnico TudoForte

## Construído com as tecnologias:
* PHP 7.3
* Laravel 8
* Docker
* Docker Compose
* Laravel Sail

## Setup

Instale as dependências do projeto
```json
composer install
```

Pode ser necessário gerar a key do laravel
```json
php artisan key:generate
```
Há 3 containers
* Laravel
* MariaDb
* Redis

Você poderá subi-los com o seguinte comando
```json
docker-compose up -d
```

Se correu tudo bem até aqui, a aplicação já estará rodando.

Rode as migrations:
```json
php artisan migrate
```

e os seeders:
```json
php artisan db:seed
```

## Swagger
A documentação está disponível no endereço:

```json
{APP_URL}/api/documentation
```

## Testes

Verifique e ajuste conforme necessário o arquivo .env.testing
Esvazie o cache de configurações e as recarregue a partir dele com o seguinte comando:
```json
php artisan config:cache --env=testing
```

Rode os testes:
```json
php artisan test --env=testing
```
OBS1: Os testes resetam o banco ao rodarem.
OBS2: Após rodar os testes, pode ser necessário refazer o cache das configurações para a aplicação voltar a funcionar
```json
php artisan config:cache
```

