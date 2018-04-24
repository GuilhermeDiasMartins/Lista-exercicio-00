<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Exercicio 1 </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body align="center">
	<div class="col-xs-4 col-xs-offset-4">
		<fieldset>
			<legend>Exercicio 11 1</legend>
			<form action="#" method="post">
				<label for="numero_">Numero 1</label><br>
				<input type="number" name="numero" ><br>

				<label for="numero_">Numero 2</label><br>
				<input type="number" name="numero_2" ><br>

				<button type="submit" class="btn">Enviar</button>
			</form>
		</fieldset>
	</div>
	
	<div class="col-xs-4 col-xs-offset-4" style="margin-top: 2%">
		<P>Resultado:</P>
		<div class="jumbotron">
			<?php
				if(isset($_POST['numero']) && isset($_POST['numero_2'])) :
					$x 	= $_POST['numero'];
					$y  = $_POST['numero_2'];

					echo "Soma: 	 	 ${x} + ${y} = ".($x+$y)."<br>";
					echo "Subtração: 	 ${x} - ${y} = ".($x-$y)."<br>";
					echo "Multiplicação: ${x} * ${y} = ".($x*$y)."<br>";
					echo "Divisão: 		 ${x} / ${y} = ".($x/$y)."<br>";
				endif
			?>
		</div>
	</div>
</body>
</html>