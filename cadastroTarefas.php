<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Cadastro de Tarefas</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="index.php">Gerenciamentos de Tarefas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="index.php">Cadastro de Usuários</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="cadastroTarefas.php">Cadastro de Tarefas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Gerenciamentos de Tarefa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <form action="inserirTarefa.php">
        <div class="container mt-5">
            <div class="my-3">
                <h1>Cadastro de Tarefas</h1>
                <h5>Descrição:</h5>
                <input type="text" name="descricao" id="">
                <h5>Setor:</h5>
                <input type="text" name="setor" id="">
                <h5>Usuários:</h5>
                <select name="usuario" id="">
                    <?php 
                    
                        include 'conexao.php';

                        $select = "SELECT * FROM usuario";
                        $usuarios = $conexao->query($select);

                        while ($usuario = $usuarios->fetch_assoc()) {
                            echo "<option value='" . $usuario['nome'] . "'>" . $usuario['nome'] . "</option>";
                        }

                    ?>
                </select>
                <h5>Prioridade:</h5>
                <select name="prioridade" id="">
                    <option value="Baixa">Baixa</option>
                    <option value="Média">Média</option>
                    <option value="Alta">Alta</option>
                </select>
            </div>
            <input type="submit" class="btn btn-primary" value="Cadastrar">
        </div>
    </form>
</body>

</html>