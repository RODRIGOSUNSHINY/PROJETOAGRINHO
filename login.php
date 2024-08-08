<?php
// Exemplo de página de login
require_once 'conexao.php';

// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar dados do formulário (exemplo simples)
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Consultar o banco de dados para verificar usuário
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Usuário autenticado, redirecionar para página de perfil
        header("Location: perfil.php");
        exit();
    } else {
        echo "Usuário ou senha incorretos.";
    }
}
?>

<!-- Formulário de login -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Email: <input type="text" name="email"><br>
    Senha: <input type="password" name="senha"><br>
    <input type="submit" value="Login">
</form>
