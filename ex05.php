<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Exercicio 05 </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body align="center">
	<div class="col-xs-4 col-xs-offset-4">
		<fieldset>
			<legend>Exercicio 5</legend>
			<form action="#" method="post">
				<label for="numero_">Numero de Eleitores</label><br>
				<input type="number" name="eleitores" ><br>

				<label for="numero_">Votos Validos</label><br>
				<input type="number" name="validos" ><br>
				
				<label for="numero_">Votos em Branco</label><br>
				<input type="number" name="branco" ><br>
				
				<label for="numero_">Votos nulos</label><br>
				<input type="number" name="nulo" ><br>
				
				<button type="submit" class="btn">Enviar</button>
			</form>
		</fieldset>
	</div>
	
	<div class="col-xs-4 col-xs-offset-4" style="margin-top: 2%">
		<P>Resultado:</P>
		<div class="jumbotron">
			<?php
				if(isset($_POST['eleitores']) && isset($_POST['validos']) && isset($_POST['branco']) && isset($_POST['nulo']) ) :
					   
					$eleitores 		= intval($_POST['eleitores']);
					$validosPercent = (intval($_POST['validos'])/$eleitores)*100;
					$brancoPercent 	= (intval($_POST['branco'])/$eleitores)*100;
					$nuloPercent 	= (intval($_POST['nulo'])/$eleitores)*100;

					echo "
						Total de Eleitores: ${eleitores}<br>
						Votos válidos: ${validosPercent}%<br> 
						Votos em branco: ${brancoPercent}%<br> 
						Votos Nulos: ${nuloPercent}%<br> 
					";

				endif
			?>
		</div>
	</div>
</body>
</html>