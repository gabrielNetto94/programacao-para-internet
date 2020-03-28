<?php
    $name = $_GET['name'];

    if(file_exists("users/".$name.".txt")){
        $file = file("users/".$name.".txt");

        ?>
        <html>
            <head>
                <meta charset="UTF-8">
                <link rel="stylesheet" type="text/css" href="../frontend/auth.css">
                <title>Dados do usuário</title>
            </head>
            
            <body>
            
                <h4>Nome: <?php echo $file[0]; ?> </h4>
                <h4>Sobrenome: <?php echo $file[1]; ?> </h4>
                <h4>Senha: <?php echo $file[2]; ?> </h4>
                <h4>Gênero: <?php echo $file[3]; ?> </h4>
                <h4>Idade: <?php echo $file[4]; ?> </h4>
                <h4>Preferências de lazer: <?php echo $file[5]; ?> </h4>

            </body>
    </html>
     
    <?php 
    } else{
        echo "<H4>Usuário não encontrado </H4>";
    }
    ?>