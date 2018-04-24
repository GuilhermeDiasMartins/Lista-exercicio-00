<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Exercio 02 </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body align="center">
	<div class="col-xs-4 col-xs-offset-4">
		<fieldset>
			<legend>Exercicio 2</legend>
			<form action="#" method="post">
				<label for="numero_">Distancia</label><br>
				<input type="number" name="distancia" ><br>
				<label for="numero_">Combustivel consumido</label><br>
				<input type="number" name="combustivel" ><br>
				<button type="submit" class="btn">Enviar</button>
			</form>
		</fieldset>
	</div>
	
	<div class="col-xs-4 col-xs-offset-4" style="margin-top: 2%">
		<P>Resultado:</P>
		<div class="jumbotron">
			<?php
				if(isset($_POST['distancia']) && isset($_POST['combustivel'])) :
					   
					$distancia = $_POST['distancia'];
					$combustivel = $_POST['combustivel'];
					$consumoMedio = $distancia/$combustivel;
					echo $consumoMedio;
				endif
			?>
		</div>
	</div>
</body>
</html>