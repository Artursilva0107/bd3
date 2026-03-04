<?php
$pdo = new PDO("mysql:host=localhost;dbname=escola", "root", "aluno123");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>