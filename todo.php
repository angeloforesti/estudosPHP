<?php
//conexao com o banco de dados
$serverName = "localhost";
$username = "root";
$passwordDb = "1234";
$dbname = "angelo";

$conn = mysqli_connect($serverName, $username, $passwordDb, $dbname);
if(!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

//inserção de dados do usuário na tabela cad_usuarios
if(isset($_POST['tarefa'])) {
    $tarefa  = $_POST['tarefa'];


    $sql = "INSERT INTO cad_afazeres (tarefa) VALUES ('$tarefa')";

    if (mysqli_query($conn, $sql)) {
        echo "tarefa cadastrada com sucesso!";
    } else {
        echo "Erro ao cadastrar tarefa: " . mysqli_error($conn);
    }





}