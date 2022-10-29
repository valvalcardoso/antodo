<?php

include '../lib/Views.php';

session_start();

$home = new HomeView();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="nav-section">
        <nav class="navbar">
            <section class="user-data">
                <div class="div-user-img">
                    <img class="user-img">
                </div>
                <div class="div-username">
                    <p class="username" id="username">Usuário</p>
                </div>
            </section>
            <section class="list-section">
                <ul class="list">
                    <li class="list-item">Cronograma Semanal</li>
                    <li class="list-item">Tarefas de Projetos</li>
                    <li class="list-item">Gerenciador Financeiro</li>
                    <li class="list-item">Sobre</li>
                    <li class="list-item">Feedback</li>
                </ul>
            </section>
        </nav>
    </section>

    <main>
        <section style="display:block;" id="Sobre" class="func-section">
            <div class="about">
                <div class="tittle-div">
                    <img class="ant-img">
                    <br>
                    <h1 class="tittle">Antodo</h1>
                    <br>
                    <p class="text">
                        No decorrer dos dias as pessoas acabam não
                        gerenciando bem o seu tempo e acabam perdendo a
                        oportunidade de fazerem uma semana,mês e ano mais
                        produtivos.<br>
                        Antodo vêm com o intuito de ajudar na questão da
                        organização pessoal e acabar com problemas de falta
                        de gestão do tempo.<br>
                        Nossa aplicação vem com 3 funcionalidades que vão
                        ajudar nossos usuários a gerenciar seu tempo e
                        dinheiro:Cronograma Semanal Tarefas de Projetos e
                        Gerenciador Financeiro.
                    </p>
                </div>
            </div>
        </section>

        <section style="display:none;" id="Cronograma Semanal" class="func-section">
            <table id="cs-table" class="table">
                <thead class="t-head">
                    <tr class="t-row">
                        <th class="camp">Segunda</th>
                        <th class="camp">Terça</th>
                        <th class="camp">Quarta</th>
                        <th class="camp">Quinta</th>
                        <th class="camp">Sexta</th>
                        <th class="camp">Sábado</th>
                    </tr>
                </thead>
                <tbody class="t-body">
                    <tr class="t-row"></tr>
                    <tr class="t-row"></tr>
                    <tr class="t-row"></tr>
                    <tr class="t-row"></tr>
                    <tr class="t-row"></tr>
                    <tr class="t-row"></tr>
                    <tr class="t-row"></tr>
                </tbody>
            </table>
        </section>

        <section style="display:none;" id="Tarefas de Projetos" class="func-section">
            <h1 class="tittle">Projetos</h1>
            <div>
                <div class="box-project">
                    Criar Um Novo Projeto
                </div>
                <div class="box-project">
                    Criar Um Novo Projeto
                </div>
                <div class="box-project">
                    Criar Um Novo Projeto
                </div>
                <div class="box-project">
                    Criar Um Novo Projeto
                </div>
            </div>
        </section>

        <section style="display:none;" id="Atividades-Projetos" class="func-section">
            <table id="tp-table" class="table">
                <thead class="t-head">
                    <tr class="t-row">
                        <th class="camp">Fazer</th>
                        <th class="camp">Fazendo</th>
                        <th class="camp">Feito</th>
                    </tr>
                </thead>
                <tbody class="t-body">
                    <tr class="t-row"></tr>
                    <tr class="t-row"></tr>
                    <tr class="t-row"></tr>
                    <tr class="t-row"></tr>
                    <tr class="t-row"></tr>
                    <tr class="t-row"></tr>
                    <tr class="t-row"></tr>
                </tbody>
            </table>
        </section>

        <section style="display:none;" id="Gerenciador Financeiro" class="func-section">
            <div class="money">
                <div class="box-money">
                    <p>Contas</p>
                    <p>-R$0,00</p>
                </div>
                <div class="box-money">
                    <p>Ganhos</p>
                    <p>+R$0,00</p>
                </div>
                <div class="box-money">
                    <p>Saldo Final</p>
                    <p>-R$0,00</p>
                </div>
            </div>
            <table id="gf-table" class="table">
                <thead class="t-head">
                    <tr class="t-row">
                        <th class="camp">Contas</th>
                        <th class="camp">Ganhos</th>
                    </tr>
                </thead>
            </table>
        </section>
        
    </main>

    <script type="module" src="../javascript/main-home.js"></script>
</body>
</html>