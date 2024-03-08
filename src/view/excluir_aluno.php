<?php
session_start();

$alunoId = $_GET['id'];
$alunos = isset($_SESSION['alunos']) ? $_SESSION['alunos'] : [];

unset($alunos[$alunoId]);
$_SESSION['alunos'] = $alunos;

header('Location: consultar_alunos.php');
exit;
?>
