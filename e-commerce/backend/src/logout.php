<?php
session_start(); 
include("conexao.php");
if (isset($_SESSION['values'])) {

    $_SESSION = array();

    session_destroy();
    header("Location: ../../frontend/pages/signin/index.php");
    exit;
} else {
    header("Location: ../../frontend/pages/signin/index.php");
    exit;
}
