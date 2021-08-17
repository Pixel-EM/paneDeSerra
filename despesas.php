<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
        <title>Pane di Serra - Vendas</title>
    </head>
    <body>
    <!-- Conexão ao DB -->
    <?php require_once('./database/read.php'); ?>
    <div class="wrapper">
        <nav class="nav">

            <div class="logo">
                <div class="img">
                    <img src="./assets/pao.png" alt="Pane di Serra">
                </div>
                <div class="nome">
                    <p>Pane di Serra</p>
                </div>
            </div>

            <ul class="list-inline">
                <li class="list-inline-item dropdown">
                    <a class="nav-link dropbtn" href="#!">Pães</a>
                    <div class="dropdown-content">
                        <a href="http://localhost/paneDeSerra">Visualizar Vendas</a>
                    </div>
                </li>
                <li class="list-inline-item dropdown">
                    <a class="nav-link dropbtn" href="#!">Casa</a>
                    <div class="dropdown-content">
                        <a href="#">Relatório Despesas</a>
                        <a href="#">Relatório Receitas</a>
                    </div>
                </li>
            </ul>

        </nav>
        
        <div class="conteudo">
            <div class="controle">
                <button id="addDespesa" class="btn btn-primary">Adicionar Despesa</button>
                <form action="database/processdesp.php" id="addDespesaForm" method="post">
                    <label for="tipodespesa">Despesa:</label>
                    <input type="text" name="tipodespesa" class="form-control" >
                    <label for="datavenc">Data de Vencimento:</label>
                    <input type="date" name="datavenc" id="dataVenc" class="form-control">
                    <label for="valordesp">Valor da Despesa:</label>
                    <input type="text" name="valordesp" class="" placeholder="R$">
                    <input type="submit" name="submit" class="btn btn-warning" value="Confirmar">
                </form>
            </div>
        
            <table id="tableDes">
                <?php
                    while($contas = $despesas->fetch()){
                    echo '<tr> '.
                          //<td>'.$contas["id"].'</td>
                          '<td>'.$contas["tipodespesa"].'</td>
                          <td>'.$contas["vencimento"].'</td>
                          <td>R$ '.number_format($contas["valor"], 2, ',', '.').'</td>                    
                          <td>
                          <form action="./database/deleteDespesas.php">
                          <button class="remVenda" name="remDes" formmethod="post" type="submit" value='.$contas["id"].'>Excluir</button>
                          </form>
                          </td>
                          </tr>';
                    }
                    ?>
            </table>
            
        </div>
    </div>
    <script type="module" src="./scripts/scripts.js"></script>
</body>
</html>