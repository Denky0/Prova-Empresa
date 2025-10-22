<?php 

    include "conexao.php";

    $id_tarefa = $_GET['id_tarefa'];
    $prioridade = $_GET['prioridade'];

    $edite = "UPDATE tarefa SET `status` = '$prioridade' WHERE id_tarefa = $id_tarefa";

    $conexao->query($edite);

    header('location:gerenciar.php');

?>