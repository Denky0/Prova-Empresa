<?php 

    include 'conexao.php';

    $id_tarefa = $_GET['id_tarefa'];

    $conexao->query("DELETE FROM tarefa WHERE id_tarefa = $id_tarefa");

    header('location:gerenciar.php');

?>