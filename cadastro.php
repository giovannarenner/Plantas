<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./css/estilo.css">
    <title>Document</title>
</head>
<body>
<h1>CADASTRO</h1>
<img  class="logo" src="./img/baixados.png" alt="logo">
<div class="email">
    <form action="./cad.php" method="post">
            <input class="inputN" type = "text"  name="user" id="user" placeholder="Nome de usuário">
        </div>
        <div class="data">
            <input class="inputN" type ="date"  name="datan" id="dataNasc" placeholder="Data de Nascimento">
        </div>
        <div class="email">
            <input class="inputN" type="email" name="email" id="email" placeholder="E-mail">
        </div>
        <div class="password">
            <input class="inputN" type="password" name="password" id="passwordlogin" placeholder="Senha">
        </div>
        <div class="cadastrar">
            <input  class ="btncadastro" type="submit" value="Cadastrar">
        </div>
</form>
        <div class="plantinhas">
   <img class="flor" src="./img/cactus.png" alt="sunflower">
   <img class="florr" id="planta 2" src="./img/flower.png" alt="sunflower">
   <img src="./img/cactus.png" alt="sunflower">
   </div>
</body>
</html>