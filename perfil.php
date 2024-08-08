<?php
// Exemplo de página de perfil do usuário
session_start();
require_once 'conexao.php';

// Verificar se o usuário está logado
if (!isset($_SESSION['id_usuario'])) {
    header("Location: login.php");
    exit();
}

$id_usuario = $_SESSION['id_usuario'];

// Consultar dados do usuário no banco de dados
$sql = "SELECT * FROM usuarios WHERE id = $id_usuario";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Exibir informações do usuário
    $row = $result->fetch_assoc();
    echo "<h1>Perfil de " . $row['nome'] . "</h1>";
    echo "<p>Email: " . $row['email'] . "</p>";
} else {
    echo "Usuário não encontrado.";
}
?>
