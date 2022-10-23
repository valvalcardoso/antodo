<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <main class="container">
        <form id="myForm" class="card-form" action="../index.php" method="POST">
            <h1>Login</h1>
            <div class="input">
                <input id="e-mail" name="email" class="input-field" type="email" required>
                <label for="email" class="input-label">Email</label>
            </div>
            <div class="input">
                <input id="senha" name="senha" class="input-field" type="password" required>
                <label for="password" class="input-label">Senha</label>
            </div>
            <div class="warning">
                <p id="warning"></p>
            </div>
            <div class="action">
                <input id="btn" class="action-button" type="submit" value="Entrar" name="btn">
            </div>
        </form>
    </main>

    <?php 
    include '../lib/Views.php';

    session_start();
    $login = new LoginView('warning');
    ?>

</body>
</html>