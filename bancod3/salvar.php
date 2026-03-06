<?php

include "conexao.php";

$tipo=$_POST["tipo"];

if($tipo=="aluno"){

$nome=$_POST["aluno"];
$conn->query("INSERT INTO alunos(nome) VALUES('$nome')");

}

if($tipo=="curso"){

$nome=$_POST["curso"];
$conn->query("INSERT INTO cursos(nome) VALUES('$nome')");

}

if($tipo=="vinculo"){

$aluno=$_POST["aluno_id"];
$curso=$_POST["curso_id"];

$conn->query("INSERT INTO vinculos(aluno_id,curso_id)
VALUES('$aluno','$curso')");

}

header("Location:index.php");