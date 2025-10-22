<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Gerenciar Tarefas</title>
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
                        <a class="nav-link text-light" href="gerenciar.php">Gerenciamentos de Tarefa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h1>Tarefas</h1>
        <div class="row align-items-start my-3">
            <div class="col">
                <h5>A Fazer</h5>

                <?php
                include 'conexao.php';
                $tarefas = $conexao->query('SELECT * FROM tarefa WHERE status = \'a fazer\'');
                while ($tarefa = $tarefas->fetch_object())
                    echo "<div class='card m-2' style='width: 18rem;'>
                                    <div class='card-body'>
                                        <p class='card-text'>Descrição: $tarefa->descricao</p>
                                        <p class='card-text'>Setor: $tarefa->setor</p>
                                        <p class='card-text'>Prioridade: $tarefa->prioridade</p>
                                        <p class='card-text'>Vinculado a: $tarefa->usuario</p>
                                        <div>
                                            <input type='submit' class='btn btn-primary btn-sm' value='Editar'>
                                            <a href='delete.php?id_tarefa=$tarefa->id_tarefa' class='btn btn-primary btn-sm'>Excluir</a>
                                        </div>
                                        <form action='alterarStatus.php' class='my-3'>
                                            <input hidden name='id_tarefa' value='$tarefa->id_tarefa'>
                                            <select name='prioridade' id=''>
                                                <option value='$tarefa->status'>$tarefa->status</option>
                                                <option value='fazendo'>Fazendo</option>
                                                <option value='feito'>Feito</option>
                                            </select>
                                            <button class='btn btn-sm btn-primary' type='submit'>Alterar Status</button>
                                        </form>
                                    </div>
                            </div>";
                ?>

            </div>
            <div class="col">
                <h5>Fazendo</h5>

                <?php
                include 'conexao.php';
                $tarefas = $conexao->query('SELECT * FROM tarefa WHERE status = \'fazendo\'');
                while ($tarefa = $tarefas->fetch_object())
                    echo "<div class='card m-2' style='width: 18rem;'>
                                    <div class='card-body'>
                                        <p class='card-text'>Descrição: $tarefa->descricao</p>
                                        <p class='card-text'>Setor: $tarefa->setor</p>
                                        <p class='card-text'>Prioridade: $tarefa->prioridade</p>
                                        <p class='card-text'>Vinculado a: $tarefa->usuario</p>
                                        <div>
                                            <input type='submit' class='btn btn-primary btn-sm' value='Editar'>
                                            <a href='delete.php?id_tarefa=$tarefa->id_tarefa' class='btn btn-primary btn-sm'>Excluir</a>
                                        </div>
                                        <form action='alterarStatus.php' class='my-3'>
                                            <input hidden name='id_tarefa' value='$tarefa->id_tarefa'>
                                            <select name='prioridade' id=''>
                                                <option value='$tarefa->status'>$tarefa->status</option>
                                                <option value='a fazer'>A Fazer</option>
                                                <option value='feito'>Feito</option>
                                            </select>
                                            <button class='btn btn-sm btn-primary' type='submit'>Alterar Status</button>
                                        </form>
                                    </div>
                            </div>";
                ?>

            </div>
            <div class="col">
                <h5>Feito</h5>

                <?php
                include 'conexao.php';
                $tarefas = $conexao->query('SELECT * FROM tarefa WHERE status = \'feito\'');
                while ($tarefa = $tarefas->fetch_object())
                    echo "<div class='card m-2' style='width: 18rem;'>
                                    <div class='card-body'>
                                        <p class='card-text'>Descrição: $tarefa->descricao</p>
                                        <p class='card-text'>Setor: $tarefa->setor</p>
                                        <p class='card-text'>Prioridade: $tarefa->prioridade</p>
                                        <p class='card-text'>Vinculado a: $tarefa->usuario</p>
                                        <div>
                                            <input type='submit' class='btn btn-primary btn-sm' value='Editar'>
                                            <a href='delete.php?id_tarefa=$tarefa->id_tarefa' class='btn btn-primary btn-sm'>Excluir</a>
                                        </div>
                                        <form action='alterarStatus.php' class='my-3'>
                                            <input hidden name='id_tarefa' value='$tarefa->id_tarefa'>
                                            <select name='prioridade' id=''>
                                                <option value='$tarefa->status'>$tarefa->status</option>
                                                <option value='a fazer'>A Fazer</option>
                                                <option value='fazendo'>Fazendo</option>
                                            </select>
                                            <button class='btn btn-sm btn-primary' type='submit'>Alterar Status</button>
                                        </form>
                                    </div>
                            </div>";
                ?>

            </div>
        </div>
    </div>
</body>

</html>