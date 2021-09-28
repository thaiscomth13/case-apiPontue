## Sobre o projeto:

API simples em Laravel  que permite criar, ler, atualizar e deletar em uma lista de séries.

## Ferramentas utilizadas:

- XAMPP;
- PHPMyAdmin;
- Postman.

## Iniciando o projeto:

- git clone https://github.com/thaiscomth13/case-apiPontue.git ;
- cd case-apiPontue;
- composer install;
- php artisan migrate;
- php artisan serve.

## Testando a API:

Endereço da API: http://localhost/apiPontue/public/api

Ação      | Request URL
--------- | ------
Create    | http://localhost/apiPontue/public/api/lista/adicionar
Read      | http://localhost/apiPontue/public/api/listando
Update    | http://localhost/apiPontue/public/api/listando/
Delete    | http://localhost/apiPontue/public/api/listando/
Select    | http://localhost/apiPontue/public/api/listando/ (adicionei para buscar por id apenas uma série)
