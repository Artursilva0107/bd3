<?php
require 'conexao.php';

$stmt = $pdo->prepare("DELETE FROM aluno_curso WHERE aluno_id = ? AND curso_id = ?");
$stmt->execute([$_GET['aluno_id'], $_GET['curso_id']]);

header("Location: index.php");
?>