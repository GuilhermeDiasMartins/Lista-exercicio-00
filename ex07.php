<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Exercicio 7</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body align="center">
	<div class="col-xs-4 col-xs-offset-4">
		<fieldset>
			<legend>Exercicio 7</legend>
			<form action="#" method="post">
				<label for="numero_">Numero 1</label><br>
				<input type="number" name="numero" ><br>

				<button type="submit" class="btn">Enviar</button>
			</form>
		</fieldset>
	</div>
	
	<div class="col-xs-4 col-xs-offset-4" style="margin-top: 2%">
		<P>Resultado:</P>
		<div class="jumbotron">
			<?php
				if( isset($_POST['numero']) ) :
					$a = $_POST['numero'];
					$quantidadeDeDivisores = 0;
					for($x = 1; $x <= $a; $x++) { 
						if($a % $x == 0){
							$quantidadeDeDivisores++;
						}
					}
					if($quantidadeDeDivisores == 2) { echo "Numero � primo"; }
					else { echo "Numero n�o � primo"; }

				endif
			?>
		</div>
	</div>
</body>
</html>