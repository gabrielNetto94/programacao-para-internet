<?php

session_start();
if (!isset($_SESSION['user'])) {
    echo "<h2>Usuário não autenticado</h2>";
    header("Refresh:2; url=auth.html");
} else {

    if ($_SESSION['user'] == $_COOKIE['username']) {
?>
        <html>

        <head>
            <meta charset="UTF-8">
            <title>Login no sistema</title>
        </head>

        <body>
            <h2>Dashboard</h2>

            <h2>Seu nível de acesso é <?php echo $_COOKIE['accessLevel'] ?></h2>

            <?php
            if ($_COOKIE['accessLevel'] >= 1) {
            ?>
                <h2>
                    <a href="http://www.google.com">Link 1</a>
                </h2>
            <?php
            }
            ?>


            <?php
            if ($_COOKIE['accessLevel'] >= 2) {
            ?>
                <h2>
                    <a href="http://www.google.com">Link 2</a>
                </h2>
            <?php
            }
            ?>

            <?php
            if ($_COOKIE['accessLevel'] >= 3) {
            ?>
                <h2>
                    <a href="http://pudim.com.br/">Link 3</a>
                </h2>
            <?php
            }
            ?>

            <h3><a href="logout.php">Sair</a></h3>
        </body>

        </html>

<?php
    }
}
?>