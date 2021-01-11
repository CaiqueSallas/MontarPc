# MontarPc
CRUD feito utilizando o Framework Laravel
<h2> Como rodar o projeto: <h2>
<h4> Programas que devem ser instalados: <h4>
<ul>
<li>Composer: https://getcomposer.org/ </li>
<li>Xampp ou Wamp: https://www.apachefriends.org/pt_br/index.html</li>
<li>Git: https://git-scm.com/ </li>
</ul>

<p></p>
<p></p>
<p></p>

<h5> Após instalar todos os programas você deverá abrir um Terminal de comando e entrar na pasta padrão de projetos do Wampp(htdocs) ou Xamp(www) e executar os seguintes comandos</h5>
<ul>
    <li>"git clone https://github.com/CaiqueSallas/MontarPc.git"</li>
    <li>"composer install"</li>
    <li>"copy .env.example .env"</li>
    <li>"php artisan key:generate"</li>
</ul>
<p> Agora com tudo já instalado você devera acessar no seu navegador a rota localhost/phpmyadmin/ e criar um banco de dados chamado laravel</p>
<p> Após criar o banco você deverá voltar ao terminal de comando e digitar "php artisan serve" </p>
<p> Agora você deve acessar a rota localhost:8000/pc e já pode ver o projeto

<h2> criação de tabelas e Inclusão de itens automático no BD </h2>
<p> Abra outro terminal de comando na mesma pasta do projeto e digite o comando "php artisan migrate"</p>
<p> Após as tabelas serem criadas digite "php artisan db:seed" para popular as tabelas</p>
