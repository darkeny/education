<?php
$host = 'localhost';
$dbname = 'Malanga';
$user = 'darkeny';
$senha = 'DPMWorking4u';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $senha);
} catch (PDOException $e) {
    echo "Erro com a conexão ao banco de dados " . $e->getMessage();
}
?>