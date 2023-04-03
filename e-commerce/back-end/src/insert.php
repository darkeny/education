<?php
session_start();
include('');

$userArgs = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = 'SELECT COUNT(*) FROM User WHERE email = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(1, $userArgs['email']);

    try {
        $stmt->execute();
        $count = $stmt->fetchColumn();

        if($count > 0){
            $_SESSION['error'] = "Email já existe no banco de dados";
            header('Location: ');
        }
    } catch (PDOException $e) {
        echo "Error no banco dados " . $e->getMessage();
    }
}
