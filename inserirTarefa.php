<?php 

    include("conexao.php");

    $usuario = $_GET['usuario'];
    $descricao = $_GET['descricao'];
    $setor = $_GET['setor'];
    $prioridade = $_GET['prioridade'];

    $insert = "INSERT INTO tarefa (usuario, descricao, setor, prioridade) VALUES ('$usuario', '$descricao', '$setor', '$prioridade')";

    $result = $conexao->query($insert);

    if ($result == true) {
        $msg = "Tarefa Cadastrada com Sucesso";
    } else {
        $msg = "Erro ao Cadastrar Tarefa";
    }

    header('location: cadastroTarefas.php?msg=$msg');

?>