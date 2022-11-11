<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../style/login-style.css" rel="stylesheet">
</head>
<body>
    <main class="container">
        <section class="box-form">
            <form id="myForm" class="form" action="../index.php" method="POST">
                <h1>Login</h1>
                <div class="input">
                    <input id="e-mail" name="email" class="input-field" type="email" placeholder="Seu E-mail" required>
                    <input style="margin-bottom:0px;" id="senha" name="senha" class="input-field" type="password" placeholder="Sua Senha" required>
                </div>
                <div style="width:100%;text-align:right;">
                    <a style="font-size:12pt;color: rgba(20,20,20,.8);" href="hi.html">Esqueceu sua senha?</a>
                </div>
                <div class="input">
                    <input id="btn" class="action-button" type="submit" value="Entrar" name="btn">
                </div>
                <div class="warning">
                    <p style="font-size:12pt;color:red;" id="warning"></p>
                </div>
            </form>
            <div class="wall">
                <div style="width:100%;text-align:center;position:sticky;top:25%;" class="about-box">
                    <img class="ant" src='../media/ant.png'>
                    <h1 style="font-size:20pt;margin-top:0;">Antodo</h1>
                    <p>Faça seu login para começar<br> nossa organização</p>
                </div>
            </div>

        </section>
        
        <div class="wall">wall</div>
    </main>

    <?php 
    include '../lib/Views.php';

    session_start();
    $login = new LoginView('warning');
    ?>

</body>
</html>