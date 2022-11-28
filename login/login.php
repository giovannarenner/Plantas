<?php

 require_once '../login/init.php';
  

 $email = isset($_POST['email']) ? $_POST['email'] : '';
 $password = isset($_POST['password']) ? $_POST['password'] : '';
 

 if (empty($email) || empty($password))
 {
     echo "Informe email e senha";
     exit;
 }
  

 $passwordHash = $password;
  

 $PDO = db_connect();
  

 $sql = "SELECT id, nome FROM usuario WHERE email = :email AND senha = :password AND ativo = '1'";
 $stmt = $PDO->prepare($sql);
  
 $stmt->bindParam(':email', $email);
 $stmt->bindParam(':password', $passwordHash);
  
 $stmt->execute();
  
 $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
 
 
 if (count($users) <= 0)
 {
    /*echo "<script type='javascript'> alert('Email ou senha inválido!');";*/
    echo "<script>javascript:window.location='../for-login.php';</script>";
     
     exit;
    
 }
  

 $user = $users[0];
  
 session_start();
 $_SESSION['logged_in'] = true;
 $_SESSION['user_id'] = $user['id'];
 $_SESSION['user_name'] = $user['nome'];
  
 if($email == "adm@adm.com"){
    header('Location: ../adm.php');
 }else{ 
 header('Location: ../home.php');
 }
 ?>
 