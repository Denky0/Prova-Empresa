<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Empresa</title>
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

    <?php 
    
        if (isset($_GET['msg'])) {
            echo "
            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                Cadastrado com Sucesso!
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
        } 
    
    ?>

    <form action="inserirCadastro.php" class="container mt-5">
        <div class="my-3">
            <h1>Cadastro de Usuários</h1>
            <h5>Nome:</h5>
            <input type="text" name="nome" id="" required>
            <h5>Email:</h5>
            <input type="text" name="email" id="" required>
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar">
    </form>
</body>

</html>