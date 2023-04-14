<?php
session_start();
include("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($nome) || empty($senha)) {
        $_SESSION['error-first'] = "<div class='text-center alert alert-danger' role='alert'>Por favor, preencha todos os campos.</div>";
        header('Location:  ../../frontend/pages/signin/index.php');
        exit;
    }
    function auth($conn, $nome, $senha)
    {
        $sql = "SELECT * FROM User WHERE nome = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $nome);
        try {
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($user && password_verify($senha, $user['senha'])) {
                return $user;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Erro no banco de dados: " . $e->getMessage();
        }
    }

    $auth = auth($conn, $nome, $senha);

    if ($auth) {
        $_SESSION['values'] = $auth;
        header('Location: ../../frontend/pages/dashboard/index.php');
    } else {
        $_SESSION['error-first'] = "<div class='text-center alert alert-danger' role='alert'>Usuário ou senha incorreto</div>";
        header('Location: ../../frontend/pages/signin/index.php');
    }
} else {
    header('Location: ../../frontend/pages/signin/index.php');
}
