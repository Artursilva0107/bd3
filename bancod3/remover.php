<?php

include "conexao.php";

$id=$_GET["id"];

$conn->query("DELETE FROM vinculos WHERE id=$id");

header("Location:index.php");