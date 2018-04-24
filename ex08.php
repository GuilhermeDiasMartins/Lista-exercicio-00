<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Exercicio  08 </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body align="center">
	<div class="col-xs-4 col-xs-offset-4">
		<fieldset>
			<legend>Exercicio  8</legend>
			<form action="#" method="post">
				<label for="numero_">Ano</label><br>
				<input type="number" name="numero" ><br>

				<button type="submit" class="btn">Enviar</button>
			</form>
		</fieldset>
	</div>
	
	<div class="col-xs-4 col-xs-offset-4" style="margin-top: 2%">
		<P>Resultado:</P>
		<div class="jumbotron">
			<?php
				if(isset($_POST['numero'])) :
					$x = $_POST['numero'];
					$resultado = ( ($x%4==0) && ( ($x%400== 0) || ($x%100!=0) ) ) ? 'é bissexto' : 'não é';

					echo $resultado; 
				endif
			?>
		</div>
	</div>
</body>
</html>