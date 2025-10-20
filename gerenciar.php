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
        <div class="my-3">
            <h5>Tarefas</h5>
            <div class="col">

                <?php 
                
                    include 'conexao.php';
                    $tarefas = $conexao->query('SELECT * FROM tarefa WHERE status = \'a fazer\'');

                    while ($tarefa = $tarefas->fetch_object())
                        echo "<h4>A Fazer</h4>
                            <div class='card m-2' style='width: 18rem;'>
                            <div class='card-body'>
                                <p class='card-text'>Descrição: $tarefa->descricao</p>
                                <p class='card-text'>Setor: $tarefa->setor</p>
                                <p class='card-text'>Prioridade: $tarefa->prioridade</p>
                                <p class='card-text'>Vinculado a: $tarefa->usuario</p>
                                <div>
                                    <input type='submit' class='btn btn-primary btn-sm' value='Editar'>
                                    <input type='submit' class='btn btn-primary btn-sm' value='Excluir'>
                                </div>
                                <div class='my-3'>
                                    <select name='prioridade' id=''>
                                        <option value='a fazer'>A Fazer</option>
                                        <option value='fazendo'>Fazendo</option>
                                        <option value='feito'>Feito</option>
                                    </select>
                                    <a href='edite.php?id_tarefa=$tarefa->id_tarefa' class='btn btn-primary btn-sm'>Alterar Status</a>
                                </div>
                            </div>
                    </div>";

                    $tarefas = $conexao->query('SELECT * FROM tarefa WHERE status = \'fazendo\'');
                    while ($tarefa = $tarefas->fetch_object())
                        echo "<h4>Fazendo</h4>
                            <div class='card m-2' style='width: 18rem;'>
                            <div class='card-body'>
                                <p class='card-text'>Descrição: $tarefa->descricao</p>
                                <p class='card-text'>Setor: $tarefa->setor</p>
                                <p class='card-text'>Prioridade: $tarefa->prioridade</p>
                                <p class='card-text'>Vinculado a: $tarefa->usuario</p>
                                <div>
                                    <input type='submit' class='btn btn-primary btn-sm' value='Editar'>
                                    <input type='submit' class='btn btn-primary btn-sm' value='Excluir'>
                                </div>
                                <div class='my-3'>
                                    <select name='prioridade' id=''>
                                        <option value='a fazer'>A Fazer</option>
                                        <option value='fazendo'>Fazendo</option>
                                        <option value='feito'>Feito</option>
                                    </select>
                                    <input type='submit' class='btn btn-primary btn-sm' value='Alterar Status'>
                                </div>
                            </div>
                    </div>";

                    $tarefas = $conexao->query('SELECT * FROM tarefa WHERE status = \'feito\'');
                    while ($tarefa = $tarefas->fetch_object())
                        echo "<h4>Fazendo</h4>
                            <div class='card m-2' style='width: 18rem;'>
                            <div class='card-body'>
                                <p class='card-text'>Descrição: $tarefa->descricao</p>
                                <p class='card-text'>Setor: $tarefa->setor</p>
                                <p class='card-text'>Prioridade: $tarefa->prioridade</p>
                                <p class='card-text'>Vinculado a: $tarefa->usuario</p>
                                <div>
                                    <input type='submit' class='btn btn-primary btn-sm' value='Editar'>
                                    <input type='submit' class='btn btn-primary btn-sm' value='Excluir'>
                                </div>
                                <div class='my-3'>
                                    <select name='prioridade' id=''>
                                        <option value='a fazer'>A Fazer</option>
                                        <option value='fazendo'>Fazendo</option>
                                        <option value='feito'>Feito</option>
                                    </select>
                                    <input type='submit' class='btn btn-primary btn-sm' value='Alterar Status'>
                                </div>
                            </div>
                    </div>";

                ?>

            </div>
            
        </div>
    </div>
</body>

</html>