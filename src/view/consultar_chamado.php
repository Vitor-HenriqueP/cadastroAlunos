<?php
require_once "../../validador_acesso.php";

$alunos = isset($_SESSION['alunos']) ? $_SESSION['alunos'] : [];

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Consulta de Alunos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .card-consultar-chamado {
            padding: 30px 0 0 0;
            width: 100%;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="../../logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Consulta de Alunos
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="../../logoff.php">SAIR</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <div class="row">
            <div class="card-consultar-chamado">
                <div class="card">
                    <div class="card-header">
                    <h5 class="card-title">Lista de Alunos</h5>
                    </div>

                    <div class="card-body">
                        <?php foreach ($alunos as $aluno) { ?>
                            <?php if (is_array($aluno)) { ?>
                                <div class="card mb-3 bg-light">
                                    <div class="card-body">
                                        
                                        <h6 class="card-title">Matrícula: <?= $aluno['matricula'] ?></h6    >
                                        <h6 class="card-title">Nome: <?= $aluno['nome'] ?></h6>
                                        <h6 class="card-title">Curso: <?= $aluno['curso'] ?></h6>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?>
                        <div class="row mt-5">
                            <div class="col-6">
                                <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>