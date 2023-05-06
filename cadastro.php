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
if(isset($_POST['submit'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO cad_usuarios (nome, email, senha) VALUES ('$name', '$email', '$senha')";

    if (mysqli_query($conn, $sql)) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar o usuário: " . mysqli_error($conn);
    }
}













// Fechamento da conexão com o banco de dados
mysqli_close($conn);


/* foi criado um banco de dados no mysql workbench apos isso foi instalado o 
php na maquina via donwload no ite do php ajustado o mesmo nas variaveis do sistema, 
alterei o php.ini na pasta de instalação do php nas linhas
"extension=mysqli descomentada
mysqli.default_host=localhost conforme BD
mysqli.default_user=username  conforme BD
mysqli.default_password=password conforme BD
mysqli.default_port=3306" conforme BD
iniciEI o servidor pelo cmd no caminho cd C:\Users\angel\OneDrive\Área de Trabalho\estudosPHP
apos isso no cmd foi escrito php -S localhost:8000 para iniciar o servidor local.
conexao funcionou e salvou. */

?>






