<?php

$conn = new mysqli("localhost","root","","escola");

if($conn->connect_error){
    die("Erro na conexão");
}

?>