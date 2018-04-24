 <!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Exercicio 5 </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body align="center">
	<div class="col-xs-4 col-xs-offset-4">
		<fieldset>
			<legend>Exercicio 5</legend>
			<form action="#" method="post">
				<label for="numero_">Numero</label><br>
				<input type="number" name="numero" ><br>
				
				<button type="submit" class="btn">Enviar</button>
			</form>
		</fieldset>
	</div>
	
	<div class="col-xs-4 col-xs-offset-4" style="margin-top: 2%">
		<P>Resultado:</P>
		<div class="jumbotron">
			<?php
				$mediaAluno = (8*1 + 7.5*2 + 10*3 + 9*4) / (1+2+3+4);
				echo "A media do aluno foi de: ${mediaAluno}";
			 ?>
		</div>
	</div>
</body>
</html>