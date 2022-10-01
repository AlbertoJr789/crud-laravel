
<h1 align="center">Projeto CRUD - Estágio</h1>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


---
<h2>Ferramentas utilizadas</h2>


    PHP: versão 8.1.6

    Composer: versão 2.3.8

    Node: versão 17.9.0

    Versão do instalador do Laravel: 4.2.17

    Laravel Breeze: para autenticação,login,registro de usuário e recuperação de senha

    Bootstrap 5: para estilização

<h2>Configuração do Projeto</h2>

* 1 - Configurando dependências
    
Após baixar os arquivos, execute a seguinte série de comandos (dentro da pasta RAIZ):

    composer install (para instalar as dependências Back-end)

    npm install && npm run dev (para instalar as dependências de front-end e o vite.js)

* 2 - Configurando Banco de Dados

No arquivo .env, modifique as opções que sejam compatíveis com a instância do MySQL em sua máquina:

    image.png


Após as configurações, migre a base de dados:

    php artisan migrate

* 3 - Configurando o Mailer (Recuperação de Senha)

Para que a aplicação possa enviar e-mails de alteração de senha para o usuário, será necessário configurar um domínio de e-mail, neste caso, será usado o SMTP do GMAIL (logo, é necessário um endereço de e-mail Google).

Após a criação do e-mail, entre na pasta .env e preencha os campos:



* 4 - Executando a aplicação

Para rodar o projeto, digite o comando:

    php artisan serve


<h1 align="center">Telas do Projeto</h1>

<h2>Login</h2>

<h2>Tela Principal</h2>

<h2>Tela de Inserção</h2>




   