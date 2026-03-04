<?php
require 'conexao.php';

$stmt = $pdo->prepare("INSERT INTO aluno_curso (aluno_id, curso_id) VALUES (?, ?)");
$stmt->execute([$_POST['aluno_id'], $_POST['curso_id']]);

header("Location: index.php");
?>