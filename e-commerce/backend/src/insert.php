<?php
session_start();
include("conexao.php");

$userArgs = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sql = "SELECT COUNT(*) FROM User WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(1, $userArgs['email']);

    try {
        $stmt->execute();
        $count = $stmt->fetchColumn();
        if ($count > 0) {
            $_SESSION['error'] = "Email já existe no banco de dados.";
            header('Location:  ../frontend/pages/signin/new.php');
        }else{
            $encryptPass = password_hash($userArgs['senha'], PASSWORD_BCRYPT);
            // Preparar a declaração SQL para inserir o registro
            $sql = "INSERT INTO User (nome, email, senha) VALUES (?,?,?)";
            $stmt = $conn->prepare($sql);
    
            // Vincular os parâmetros
            $stmt->bindValue(1, $userArgs['nome']);
            $stmt->bindValue(2, $userArgs['email']);
            $stmt->bindValue(3, $encryptPass);
    
            // Executar a declaração SQL
            try {
                $stmt->execute();
                echo "Registro criado com sucesso!";
                header('Location: ../frontend/pages/signin/');
            } catch (PDOException $e) {
                echo "Erro ao criar o registro: " . $e->getMessage();
            }
        }
    } catch (PDOException $e) {
        echo "Erro com banco de dados" . $e->getMessage();
    }

}
