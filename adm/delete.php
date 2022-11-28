<?php
$id = $_GET['id'];


try {
    $conexao = new PDO("mysql:host=localhost;dbname=dbplantinhas", "root", "");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->exec("set names utf8");
    echo 'conectei';
} catch (PDOException $erro) {
    echo "Erro na conexão:".$erro->getMessage();
}

$stmt = $conexao->prepare("DELETE FROM usuario WHERE id = ?");
$stmt->bindParam(1, $id);

$stmt->execute();
header('Location: ../adm.php');
?>