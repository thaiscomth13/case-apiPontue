## Sobre o projeto:

API simples em Laravel  que permite criar, ler, atualizar e deletar em uma lista de séries.

## Ferramentas utilizadas:

- XAMPP;
- PHPMyAdmin (arquivo db_lista.sql);
- Postman (arquivo com testes apiPontue-Testes.postman_collection.json).

## Iniciando o projeto:

- git clone https://github.com/thaiscomth13/case-apiPontue.git ;
- colocar a pasta clonada dentro do htdocs;
- iniciar apache e mysql;
- acessar API através de http://localhost/apiPontue/public/

## Testando a API:

Endereço da API: http://localhost/apiPontue/public/api

Ação      | Request URL
--------- | ------
Create    | http://localhost/apiPontue/public/api/lista/adicionar
Read      | http://localhost/apiPontue/public/api/listando
Update    | http://localhost/apiPontue/public/api/listando/
Delete    | http://localhost/apiPontue/public/api/listando/
Select    | http://localhost/apiPontue/public/api/listando/ (adicionei para buscar por id apenas uma série)
