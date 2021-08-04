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
        <script type="module" src="./scripts/scripts.js"></script>
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
                        <a href="despesas.php">Relatório Despesas</a>
                        <a href="#">Relatório Receitas</a>
                    </div>
                </li>
            </ul>
        </nav>
        
        <div class="conteudo">
            <div class="controle">
                <button id="addVenda" class="btn btn-primary">Adicionar Venda</button>
                <form action="database/process.php" id="addVendaForm" method="POST">
                <div id="tipoQnt">
                    <select name="tipopao" id="tipopao">
                        <option value="australiano">Australiano</option>
                        <option value="light">Light</option>
                        <option value="fibraLight">Fibra Light</option>
                        <option value="uvaPassaCanela">Uva Passa</option>
                        <option value="integral">Integral</option>
                        <option value="aveia">Aveia</option>
                        <option value="banana">Banana</option>
                        <option value="linhaca">Linhaça</option>
                        <option value="maca">Maçã</option>
                        <option value="ortomolecular">Ortomolecular</option>
                    </select>
                    
                    <input type="number" id="qnt" name="qnt" min="1" max="500" value="1">
                </div>
                
                <input name="nomecliente" type="text" placeholder="Insira o nome do cliente" required>
                <input name="precovenda" type="text" placeholder="Insira o valor" required>
                
                <input type="submit" value="Adicionar" class="btn btn-warning">
            </form>
        </div>
        
        
            <table id="tableVen">
                <?php
                    while($venda = $stmt->fetch()){
                        echo '<tr>
                        <td>'.$venda["id"].'</td>
                        <td>'.$venda["receita"].'</td>
                        <td>'.$venda["cliente"].'</td>
                        <td>'.$venda["data"].'</td>                    
                        <td>R$ '.$venda["precoCusto"].'</td>
                        <td>R$ '.$venda["precoVenda"].'.00</td>
                        <td>
                        <form action="./database/delete.php">
                        <button class="remVenda" name="remVenda" formmethod="post" type="submit" value='.$venda["id"].'>Excluir</button>
                        </form>
                        </td>
                        </tr>';
                    }
                    ?>
            </table>
            
        </div>
    </div>
    
</body>
</html>