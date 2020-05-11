<?php

include("Disciplina.php");

$disciplina = new Disciplina();

$disciplina->setNomeDisciplina("Programação para internet");
$disciplina->setCargaHoraria("80h");
$disciplina->setNomeProfessor("Guilherme Kurtz");

?>

<html>

<body>

    <head>
        <meta charset="utf-8">
        <title>Disciplina</title>
    </head>

    <h3>Conteúdo original da classe disciplina</h3>
    <h4>Nome da disciplina: <?php echo $disciplina->getNomeDisciplina(); ?> </h4>
    <h4>Carga horária: <?php echo $disciplina->getCargaHoraria(); ?> </h4>
    <h4>Nome do professor: <?php echo $disciplina->getNomeProfessor(); ?> </h4>

    <form action="server.php" method="POST">
        <h3>Alterar valores da classe Disciplina</h3>

        <input type="text" name="nomeDisciplina" placeholder="Digite novo da nome disciplina"><br>
        <input type="number" name="cargaHoraria" placeholder="Digite nova carga horária"><br>
        <input type="text" name="nomeProfessor" placeholder="Digite novo do professor"><br>

        <button type="submit">Alterar</button>
    </form>
</body>

</html>
