<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Exercicio 04 </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body align="center">
	<div class="col-xs-4 col-xs-offset-4">
		<fieldset>
			<legend>Exercicio 4</legend>
			<form action="#" method="post">
				<label for="numero_">Carros Vendidos</label><br>
				<input type="number" name="carros" ><br>
				<button type="submit" class="btn">Enviar</button>
			</form>
		</fieldset>
	</div>
	
	<div class="col-xs-4 col-xs-offset-4" style="margin-top: 2%">
		<P>Resultado:</P>
		<div class="jumbotron">
			<?php
				if(isset($_POST['carros']) ) :
					   
					$carros = $_POST['carros'];
					$salarioBase = 800;
					$comissaoPorCarro = 300;

					$salarioFinal = $salarioBase + ($carros*$comissaoPorCarro);
					echo $salarioFinal;
				endif
			?>
		</div>
	</div>
</body>
</html>