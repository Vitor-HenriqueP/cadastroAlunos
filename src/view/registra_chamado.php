<?php
// registra_chamado.php
session_start();
require_once "../../validador_acesso.php";

// Criar um array privado para armazenar os chamados
if (!isset($_SESSION['chamados'])) {
    $_SESSION['chamados'] = [];
}

// Estamos trabalhando na montagem do texto
$nome = str_replace('#', '-', $_POST['nome']);
$matricula = str_replace('#', '-', $_POST['matricula']);
$curso = str_replace('#', '-', $_POST['curso']);

// Criar um novo chamado como um array associativo
$alunos = [
    'id' => $_SESSION['id'],
    'nome' => $nome,
    'matricula' => $matricula,
    'curso' => $curso
];

// Adicionar o novo chamado ao array de chamados na sessão
$_SESSION['alunos'][] = $alunos;

// Redirecionar para a página abrir_chamado.php
header('Location: abrir_chamado.php');
