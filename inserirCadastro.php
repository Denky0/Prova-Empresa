<?php 

    include("conexao.php");

    $nome = $_GET['nome'];
    $email = $_GET['email'];

    $insert = "INSERT INTO usuario VALUES ('', '$nome', '$email')";

    $conexao->query($insert);

    echo "Usuário cadastrado com sucesso! <a href='index.php'><button>Voltar</button></a>";

?>