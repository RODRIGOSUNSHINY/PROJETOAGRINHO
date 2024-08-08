<?php
// Exemplo de página de registro
require_once 'conexao.php';

// Processar dados do formulário de registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar dados do formulário (exemplo simples)
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Inserir novo usuário no banco de dados
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro realizado com sucesso.";
    } else {
        echo "Erro ao registrar usuário: " . $conn->error;
    }
}
?>

<!-- Formulário de registro -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nome: <input type="text" name="nome"><br>
    Email: <input type="text" name="email"><br>
    Senha: <input type="password" name="senha"><br>
    <input type="submit" value="Registrar">
</form>
