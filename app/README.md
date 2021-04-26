# Bora começar!?

Dependências: 
- docker
- docker-cli

A estrutura de arquivos se encontra da seguinte maneira:

- app/
- docker/
- .gitignore
- mer.mwb
- README.mb

#### Você já deve ter acessado a pasta `app/` nesse momento

Execute os comandos a baixo, na ordem que são demonstrados, para subir a aplicação:
```code
make docker
docker exec -it lamp-php8 bash
cd /var/www/app
make init 
make deps
```
Ao acessar `http://localhost` você deve se deparar com a página de boas vindas.

> Nota: Verifique que os serviços abaixo não estejam rodando ou que suas portas não estejam em uso:
- Apache --port=80
- Mysql --port=3306

## Para vizualizar a documentação da api acesse
`http://localhost/docs/`

## Para ter acesso aos endpoints do Postman, basta importar o arquivo:
` - app/canalfy.postman_collection.json`

## Para executar os testes execute os comandos abaixo:

```code
docker-exec -it lamp-php8 bash
cd /var/www/app
make test
```