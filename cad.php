<?php

$nome = (isset($_POST["user"]) && $_POST["user"] != null) ? $_POST["user"] : "";
$email = (isset($_POST["email"]) && $_POST["email"] != null) ? $_POST["email"] : "";
$senha = (isset($_POST["password"]) && $_POST["password"] != null) ? $_POST["password"] : "";
$datan = (isset($_POST["datan"]) && $_POST["datan"] != null) ? $_POST["datan"] : "";

if (empty($nome) || empty($email) || empty($senha) || empty($datan)) {
    echo "preencha os campos";
} else {

    try {
        $conexao = new PDO("mysql:host=localhost;dbname=dbplantinhas", "root", "");
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexao->exec("set names utf8");
    } catch (PDOException $erro) {
        echo "Erro na conexão:" . $erro->getMessage();
    }
    $stmt = $conexao->prepare("INSERT INTO usuario (nome, email, senha, dataNasc,ativo) VALUES (?, ?, ?, ?,'0')");
    $stmt->bindParam(1, $nome);
    $stmt->bindParam(2, $email);
    $stmt->bindParam(3, $senha);
    $stmt->bindParam(4, $datan);
    $stmt->execute();
    header('Location: ./for-login.php');

}
