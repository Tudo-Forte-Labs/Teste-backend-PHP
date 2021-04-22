# Teste Prático de PHP para novos Colaboradores

O objetivo deste teste é conhecer suas habilidades em:

* PHP, MySQL, RestAPI, Laravel e MySQL.
* Entendimento e análise dos requisitos.
* Modelagem de banco de dados.
* Conhecimentos sobre RestAPI.

A aplicação pode ser feita em PHP puro ou algum utilizando framework Laravel. Banco de dados MySQL ou MariaDB.

## Problema
Seu desafio será criar uma API com endpoints necessários para implementar os cenários que serão descritos abaixo.

### Sistema de Vendas

* O cliente poderá registrar vendas de produtos com a data da venda e endereço de entrega;
* Deve ser possível buscar produtos pelo nome ou referência;
* O cliente poderá ter acesso ao estado da venda, retornando as seguintes informações: produtos adicionados, preço de cada produto, e fornecedores dos produtos, além do mais, a API deverá retornar o valor total da venda.

|  Nome  |  Preço  |  Fornecedor(es)  |
| ------ | ------- | -----------------|
| Prod A | 2,50    | Forn A, Forn B   |
| Prod B | 10,00   |                  |
| Prod C | 5,00    | Forn D           |

**Total: 17,50**


## Diferenciais

* Usar testes unitários para qualquer parte do sistema.
* Procure fazer vários commits com mensagens claras.
* Utilizar IoC.
* Utilizar todas boas práticas recomendas pelo PSRs.
* Criar uma documentação openAPI.
* Criar ambiente docker.
