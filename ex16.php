<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Exercicio 16</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body align="center">
	<div class="col-xs-4 col-xs-offset-4">
		<fieldset>
			<legend>Exercicio 16</legend>
			<form action="#" method="post">
				<label for="numero_">Frase</label><br>
				<input type="text" name="frase" ><br>

				<button type="submit" class="btn">Enviar</button>
			</form>
		</fieldset>
	</div>
	
	<div class="col-xs-4 col-xs-offset-4" style="margin-top: 2%">
		<P>Resultado:</P>
		<div class="jumbotron">
			<?php
			if( isset($_POST['frase']) ):
				$frase = $_POST['frase'];
				$arr = str_split($frase);
				$vogais = 0;

				foreach ($arr as $key => $value) {
					if($value == 'a' || $value == 'e' || $value == 'i' || $value == 'o' || $value == 'u'){
						$vogais++;
					}
				}
				echo "Existem: ".$vogais." vogais na frase.";
			endif;
			?>
		</div>
	</div>
</body>
</html>