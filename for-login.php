<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<div class="container"">
    <div class="header">
        <div class="titulo">
    <h1>Dandellion</h1>
    </div>

    <div class="borderlogo">
    <img  class="logo" src="./img/logo2.png" alt="logo">
    </div>
       <h4>Aqui você encontrará tudo sobre plantas</h4>
       
</div>
<form action="./login/login.php" method="post">
        <div class="email">
            
            <input class="inputI" type = "email"  name="email" id="emaillogin" placeholder="E-mail">
        </div>
        <div class="password">
            <input class="inputI" type="password" name="password" id="passwordlogin" placeholder="Senha">
        </div>
        <div class="entrar">
            <input class ="btnentrar" type="submit" value="Entrar" onclick="logar()">
        </div>
        </form>
        <h3>Não possui cadastro? <a href="./cadastro.php">Clique aqui!</a></h3>
    </div>

</div>
   
   
</body>
</html>