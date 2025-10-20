<?php 

    include("conexao.php");

    $nome = $_GET['nome'];
    $email = $_GET['email'];

    $insert = "INSERT INTO usuario VALUES ('', '$nome', '$email')";

    $result = $conexao->query($insert);

    if ($result == true) {
        $msg = "Cadastrado com Sucesso!";
    } else {
        $msg = "Erro ao Cadastrar Usuário!";
    }

    header('location:index.php?msg=$msg');

?>