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

    <script type="module" src="../javascript/main-home.js"></script>
</body>
</html>