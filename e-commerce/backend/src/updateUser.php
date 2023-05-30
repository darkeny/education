<?php
session_start();
include("conexao.php");

$userArgs = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    try {
        $stmt = $conn->prepare('UPDATE User SET nome = :nome, email = :email, senha = :senha WHERE id = :id');
        $stmt->bindParam(':id', $userArgs['id']);
        $stmt->bindParam(':nome', $userArgs['nome']);
        $stmt->bindParam(':email', $userArgs['email']);
        $stmt->bindParam(':senha', $userArgs['senha']);
        $stmt->execute();
        header('Location:  ../../frontend/pages/dashboard/index.php');
    } catch (PDOException $e) {
        echo 'Erro ao atualizar os dados do usuário: ' . $e->getMessage();
    }
}
