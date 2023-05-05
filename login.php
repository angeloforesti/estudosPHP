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


//processamento deos dados do form de login
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
}

// Consulta SQL para verificar as credenciais de login
$sql = "SELECT * FROM cad_usuarios WHERE nome = '$username' and senha = '$password'";
$result = mysqli_query($conn, $sql);

// Verifica se a consulta retornou algum resultado
if (mysqli_num_rows($result) == 1) {
    // Inicia a sessão e redireciona o usuário para a página de boas-vindas
    session_start();
    $_SESSION["username"] = $username;
    header("location: todolist.html");
} else {
    // Exibe mensagem de erro se as informações de login estiverem incorretas
    $error = "Nome de usuário ou senha incorretos";
}