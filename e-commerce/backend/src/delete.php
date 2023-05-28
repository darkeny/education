<?php
session_start();
include("conexao.php");

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM User WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    header('Location:  ../../frontend/pages/dashboard/index.php');

    try {
        $stmt->execute();
    } catch (PDOException $e) {
        echo "Erro com banco de dados: " . $e->getMessage();
    }
}
