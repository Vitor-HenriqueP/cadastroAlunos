<?php
// registra_alunos.php
session_start();
require_once "../../validador_acesso.php";

// Criar um array privado para armazenar os alunos
if (!isset($_SESSION['aluno'])) {
    $_SESSION['aluno'] = [];
}

// Estamos trabalhando na montagem do texto
$nome = str_replace('#', '-', $_POST['nome']);
$matricula = str_replace('#', '-', $_POST['matricula']);
$curso = str_replace('#', '-', $_POST['curso']);

// Cadastrar um novo aluno como um array associativo
$alunos = [
    'id' => $_SESSION['id'],
    'nome' => $nome,
    'matricula' => $matricula,
    'curso' => $curso
];

// Adicionar o novo chamado ao array de alunos na sessão
$_SESSION['alunos'][] = $alunos;

// Redirecionar para a página cadastrar_alunos.php
header('Location: cadastrar_alunos.php');
