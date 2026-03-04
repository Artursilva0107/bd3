<?php
require 'conexao.php';

$stmt = $pdo->prepare("INSERT INTO alunos (nome) VALUES (?)");
$stmt->execute([$_POST['nome']]);

header("Location: index.php");
?>