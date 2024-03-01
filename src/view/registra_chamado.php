<?php
// registra_chamado.php
session_start();
require_once "../../validador_acesso.php";

// Criar um array privado para armazenar os chamados
if (!isset($_SESSION['chamados'])) {
    $_SESSION['chamados'] = [];
}

// Estamos trabalhando na montagem do texto
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

// Criar um novo chamado como um array associativo
$chamado = [
    'id' => $_SESSION['id'],
    'titulo' => $titulo,
    'categoria' => $categoria,
    'descricao' => $descricao
];

// Adicionar o novo chamado ao array de chamados na sessão
$_SESSION['chamados'][] = $chamado;

// Redirecionar para a página abrir_chamado.php
header('Location: abrir_chamado.php');
?>