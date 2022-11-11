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
    <link rel="stylesheet" href="../style/home-style-01.css">
    <link rel="stylesheet" href="../style/home-style-02.css">
</head>
<body>
    <section class="nav-section">
        <nav class="navbar">
            <section class="user-data">
                <div class="div-user-img">
                    <img src="../media/girl.png" class="user-img">
                </div>
                <div class="div-username">
                    <p class="username" id="username">Usuário</p>
                </div>
                <button class="edit-button">Editar</button>
            </section>
            <section class="list-section">
                <ul class="list">
                    <li class="list-item">C.Semanal</li>
                    <li class="list-item" id='tp-item'>T.Projetos</li>
                    <li class="list-item">G.Financeiro</li>
                    <li class="list-item">Sobre</li>
                    <li class="list-item" style="border-bottom:0;">Feedback</li>
                </ul>
            </section>
        </nav>
    </section>

    <main class="main-content">
        <section id="Sobre" class="func-section">
            <div class="about">
                <div class="about-div">
                    <img src="../media/ant.png" class="ant-img">
                    <h1 class="title">Antodo</h1>
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

        <section style="display:none;" id="C.Semanal" class="func-section">
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
                    <tr class="t-row"></tr>
                </tbody>
            </table>
        </section>

        <section style="display:none;" id="T.Projetos" class="func-section">
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

        <section style="display:none;" id="G.Financeiro" class="func-section">
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