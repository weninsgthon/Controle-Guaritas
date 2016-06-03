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

	<!-- Conteúdo -->
	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb"><li><a href="index.php">Início</a></li>
						<li><a href="carregando.php">Carregando</a></li>
						<li class="active">Lista Geral</li></ul>
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title"><i class="fa fa-truck fa-lg" aria-hidden="true"></i> Lista Geral</h3>
							</div>
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-hover table-striped">
										<thead>
											<tr>
												<th class="text-center">ID</th>
												<th class="text-center">PLACA</th>
												<th class="text-center">MOTORISTA</th>
												<th class="text-center">EMPRESA</th>
												<th class="text-center">TRANSPORTADORA</th>
												<th class="text-center">TIPO CARRETA</th>
												<th class="text-center">CHEGADA</th>
												<th class="text-center">ENTRADA</th>
												<th class="text-center">SAÍDA</th>
												<th class="text-center">NF</th>
												<th class="text-center">STATUS</th>
											</tr>
										</thead>
										<tbody class="text-center">
											<tr>
												<td>1</td>
												<td>NBI2934</td>
												<td>ROBSON</td>
												<td>Cargill</td>
												<td>Cargill</td>
												<td>Bi-Trem</td>
												<td>2016-06-03 08:27:00</td>
												<td>2016-06-03 08:27:00</td>
												<td>2016-06-03 08:27:00</td>
												<td>27724</td>
												<td>OK</td>
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