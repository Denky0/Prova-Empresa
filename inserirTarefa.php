<?php 

    include("conexao.php");

    $usuario = $_GET['usuario'];
    $descricao = $_GET['descricao'];
    $setor = $_GET['setor'];
    $prioridade = $_GET['prioridade'];

    $insert = "INSERT INTO tarefa (usuario, descricao, setor, prioridade) VALUES ('$usuario', '$descricao', '$setor', '$prioridade')";

    $conexao->query($insert);

    header("Location: cadastroTarefas.php");

?>