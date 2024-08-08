<?php
// Exemplo de página para listar vagas de emprego
require_once 'conexao.php';

// Consultar vagas no banco de dados
$sql = "SELECT * FROM vagas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Exibir lista de vagas
    echo "<h1>Vagas de Emprego</h1>";
    while ($row = $result->fetch_assoc()) {
        echo "<h2>" . $row['titulo'] . "</h2>";
        echo "<p>" . $row['descricao'] . "</p>";
        echo "<p>Localização: " . $row['localizacao'] . "</p>";
        echo "<hr>";
    }
} else {
    echo "Nenhuma vaga encontrada.";
}
?>
