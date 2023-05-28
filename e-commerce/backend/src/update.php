<?php
session_start();
include("conexao.php");

$userArgs = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($userArgs['nome']) && !empty($userArgs['senha']) && !empty($userArgs['email'])) {

    // Verificação de ID
    $id = $userArgs['id'];
    $sql = "SELECT id FROM User WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(1, $id);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($row) {
        // ID válido, prosseguir com a atualização
        $sql = "UPDATE User SET nome = ?, senha = ? WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $userArgs['nome']);
        $stmt->bindValue(2, $userArgs['senha']);
        $stmt->bindValue(3, $userArgs['email']);

        try {
            $stmt->execute();
            header('Location: ../../frontend/pages/dashboard/index.php');
        } catch (PDOException $e) {
            echo "Erro com banco de dados: " . $e->getMessage();
        }
    } else {
        echo "ID inválido.";
    }
} else {
    echo "Por favor, preencha todos os campos de atualização.";
}
?>
