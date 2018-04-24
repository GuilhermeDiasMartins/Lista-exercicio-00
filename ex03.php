<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Exercicio 03 </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body align="center">
	<div class="col-xs-4 col-xs-offset-4">
		<fieldset>
			<legend>Exercicio 3</legend>
			<form action="#" method="post">
				<label for="numero_">Km percorrido</label><br>
				<input type="number" name="distancia" ><br>
				<label for="numero_">Combustivel consumido</label><br>
				<input type="number" name="combustivel" ><br>
				<label for="numero_">Valor do Litro de combustivel</label><br>
				<input type="number" name="valorCombustivel" ><br>
				<button type="submit" class="btn">Enviar</button>
			</form>
		</fieldset>
	</div>
	
	<div class="col-xs-4 col-xs-offset-4" style="margin-top: 2%">
		<P>Resultado:</P>
		<div class="jumbotron">
			<?php
				if(isset($_POST['distancia']) && isset($_POST['combustivel']) && isset($_POST['valorCombustivel'])) :
					   
					$distancia = $_POST['distancia'];
					$combustivel = $_POST['combustivel'];
					$valorCombustivel = $_POST['valorCombustivel'];

					$custoPorKm = ($combustivel*$valorCombustivel)/$distancia;
					echo $custoPorKm."R$ por km";
				endif
			?>
		</div>
	</div>
</body>
</html>