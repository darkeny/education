<?php
session_start();
include("conexao.php");

    if (!isset($_GET['id'])) {
        header('Location: ../../frontend/pages/dashboard/index.php');
        exit;
    }

    $id = $_GET['id'];
    $sql = "SELECT * FROM User WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    $user_data = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user_data) {
        header('Location: ../../frontend/pages/dashboard/index.php');
        $_SESSION['users'] = $user_data;
        exit;
    }
