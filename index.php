<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <title>Pane di Serra</title>
    </head>
    <body>
    <!-- Conexão ao DB -->
    <?php include './database/connection.php' ?>
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
                <li class="list-inline-item">
                    <a class="nav-link " href="#!">Início</a>
                </li>
                <li class="list-inline-item dropdown">
                    <a class="nav-link dropbtn" href="#!">Pães</a>
                    <div class="dropdown-content">
                        <a href="#">Visualizar Vendas</a>
                        <a href="#">Visualizar Receitas</a>
                        <a href="#">Visualizar Clientes</a>
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

        <div id="tabelaVendas" class="conteudo">
            <table></table>
        </div>

    </div>
    </body>

    <script type="module" src="./scripts/scripts.js"></script>
</html>