<?php include "conexao.php"; ?>

<h2>Novo Aluno</h2>
<form action="salvar.php" method="post">
<input type="text" name="aluno">
<button type="submit" name="tipo" value="aluno">Salvar</button>
</form>

<h2>Novo Curso</h2>
<form action="salvar.php" method="post">
<input type="text" name="curso">
<button type="submit" name="tipo" value="curso">Salvar</button>
</form>

<h2>Vincular</h2>

<form action="salvar.php" method="post">

Aluno
<select name="aluno_id">
<?php
$r = $conn->query("SELECT * FROM alunos");
while($a = $r->fetch_assoc()){
echo "<option value=".$a['id'].">".$a['nome']."</option>";
}
?>
</select>

Curso
<select name="curso_id">
<?php
$r = $conn->query("SELECT * FROM cursos");
while($c = $r->fetch_assoc()){
echo "<option value=".$c['id'].">".$c['nome']."</option>";
}
?>
</select>

<button type="submit" name="tipo" value="vinculo">Vincular</button>

</form>

<h2>Lista</h2>

<table border="1">

<tr>
<th>Aluno</th>
<th>Curso</th>
<th></th>
</tr>

<?php

$sql="SELECT vinculos.id, alunos.nome aluno, cursos.nome curso
FROM vinculos
JOIN alunos ON alunos.id=vinculos.aluno_id
JOIN cursos ON cursos.id=vinculos.curso_id";

$res=$conn->query($sql);

while($row=$res->fetch_assoc()){

echo "<tr>
<td>".$row['aluno']."</td>
<td>".$row['curso']."</td>
<td><a href='remover.php?id=".$row['id']."'>Remover</a></td>
</tr>";

}

?>

</table>