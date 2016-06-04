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
                            <h3 class="panel-title">Panel title</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="control-label">Produto</label>
                                <form role="form">
                                    <select class="form-control">
                                        <option></option>
                                        <option>Soja</option>
                                        <option>Milho</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Empresa</label>
                                    <select class="form-control">
                                        <option></option>
                                        <option>Amaggi</option>
                                        <option>Cargill</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Transportadora</label>
                                    <select class="form-control">
                                        <option></option>
                                        <option>Amaggi</option>
                                        <option>Cargill</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Tipo Caminhão</label>
                                    <select class="form-control">
                                        <option></option>
                                        <option>LS</option>
                                        <option>Bi-Trem</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Motorista</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Placa</label>
                                    <input class="form-control" type="text">
                                </div>
                                <button type="submit" class="btn btn-block btn-lg btn-primary">Submit</button>
                            </form>
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