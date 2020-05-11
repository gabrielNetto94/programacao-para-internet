<?php

$nomeDisciplina = $_POST['nomeDisciplina'];
$cargaHoraria = $_POST['cargaHoraria'];
$nomeProfessor = $_POST['nomeProfessor'];


include("Disciplina.php");

$disciplina = new Disciplina();

$disciplina->setNomeDisciplina($nomeDisciplina);
$disciplina->setCargaHoraria($cargaHoraria);
$disciplina->setNomeProfessor($nomeProfessor);

?>

<h3>Conteúdo original da classe disciplina</h3>
<h4>Nome da disciplina: <?php echo $disciplina->getNomeDisciplina(); ?> </h4><br>
<h4>Carga horária: <?php echo $disciplina->getCargaHoraria(); ?> </h4><br>
<h4>Nome do professor: <?php echo $disciplina->getNomeProfessor(); ?> </h4><br>