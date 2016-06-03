<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <!-- Conteúdo CSS -->
    <?php include 'css.php';?>
</head>
<body>

    <!-- Menu Principal -->
    <?php include 'menu.php';?>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-truck fa-lg" aria-hidden="true"></i> Carregamento Grãos</h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">ENTRADA/SAÍDA</th>
                                        <th class="text-center">PLACA</th>
                                        <th class="text-center">MOTORISTA</th>
                                        <th class="text-center">EMPRESA</th>
                                        <th class="text-center">CHEGADA/ENTRADA</th>
                                        <th class="text-center">STATUS</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <td>1</td>
                                        <td><a class="btn btn-block btn-warning">Entrar <i class="fa fa-long-arrow-right fa-lg" aria-hidden="true"></i></a></td>
                                        <td>NDI630</td>
                                        <td>Claudio</td>
                                        <td>Cargill</td>
                                        <td>2016-06-03 09:28:00</td>
                                        <td>Fila</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><a class="btn btn-block btn-danger"><i class="fa fa-long-arrow-left fa-lg" aria-hidden="true"></i> Sair</a></td>
                                        <td>NDI630</td>
                                        <td>Claudio</td>
                                        <td>Cargill</td>
                                        <td>2016-06-03 09:28:00</td>
                                        <td>Fila</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- jQuery (obrigatório para plugins JavaScript) -->
    <?php include 'js.php';?>
</body>
</html>