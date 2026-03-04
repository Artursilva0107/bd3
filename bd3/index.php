<?php require 'conexao.php'; ?>

<h2>Cadastrar Aluno</h2>
<form action="salvar_aluno.php" method="post">
    <input type="text" name="nome" placeholder="Nome do aluno" required>
    <button type="submit">Salvar</button>
</form>

<h2>Cadastrar Curso</h2>
<form action="salvar_curso.php" method="post">
    <input type="text" name="nome" placeholder="Nome do curso" required>
    <button type="submit">Salvar</button>
</form>

<h2>Vincular Aluno ao Curso</h2>
<form action="vincular.php" method="post">
    <select name="aluno_id">
        <?php
        $alunos = $pdo->query("SELECT * FROM alunos");
        foreach ($alunos as $a) {
            echo "<option value='{$a['id']}'>{$a['nome']}</option>";
        }
        ?>
    </select>

    <select name="curso_id">
        <?php
        $cursos = $pdo->query("SELECT * FROM cursos");
        foreach ($cursos as $c) {
            echo "<option value='{$c['id']}'>{$c['nome']}</option>";
        }
        ?>
    </select>

    <button type="submit">Vincular</button>
</form>

<h2>Lista de Alunos com Cursos</h2>

<?php
$sql = "
SELECT alunos.nome AS aluno, cursos.nome AS curso, alunos.id AS aluno_id, cursos.id AS curso_id
FROM aluno_curso
JOIN alunos ON alunos.id = aluno_curso.aluno_id
JOIN cursos ON cursos.id = aluno_curso.curso_id
";

foreach ($pdo->query($sql) as $row) {
    echo $row['aluno'] . " - " . $row['curso'];
    echo " <a href='remover_vinculo.php?aluno_id={$row['aluno_id']}&curso_id={$row['curso_id']}'>Remover</a><br>";
}
?>