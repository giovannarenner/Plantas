<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styleadm.css">
    <title>Tabela de usuários</title>
</head>

<body>
    <form method="POST">
        <a class="btnsair" href="./login/logout.php">Sair</a>
        <p class="TTabela id=" label">Tabela de ativação de usuário.</p>
        <br><br>
        <div class=container>
        <table class="tabela">
            <thead>
                <tr style="align-items: center; text-align: center;">
                    <th class="tabela2">Nome</th>
                    <th class="tabela2">E-mail</th>
                    <th class="tabela2">Nascimento</th>
                    <th class="tabela2">Status</th>
                    <th class="tabela2">CMD</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                
            <?php
            try {
                $conexao = new PDO("mysql:host=localhost;dbname=dbplantinhas", "root", "");
                $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conexao->exec("set names utf8");
            } catch (PDOException $erro) {
                echo "Erro na conexão:" . $erro->getMessage();
            }
            
                try {
                    $stmt = $conexao->prepare("SELECT * FROM usuario");
                    
                    if ($stmt->execute()) {
                        while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {

                            echo "<tr>";
                            echo "<td>".$rs->nome."</td>
                                  <td>".$rs->email."</td>
                                  <td>".$rs->dataNasc."</td>
                                  <td>".$rs->ativo."</td>
                                  <td><center><a name='id' href=./adm/atv.php?id=".$rs->id.">[Ativar]</a>"
                                       ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
                                       ."<a name='id' href= ./adm/block.php?id=".$rs->id.">[Desativar]</a>"
                                       ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
                                       ."<a name='id' href= ./adm/delete.php?id=".$rs->id.">[Deletar]</a></center>
                                    </td>";
                            echo "</tr>";
                        }
                    
                    }else{
                        echo "Erro!";
                    }
                    }catch(PDOException $erro){
                        echo "Erro: " . $erro->getMessage();
                    }
                
                ?>
                    
                
            </tbody>
        </table>
        </div>
        </div>
    </form>
</body>

</html>
