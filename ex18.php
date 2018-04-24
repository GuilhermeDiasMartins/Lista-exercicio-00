<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Exercicio 18</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body align="center">
	<div class="col-xs-4 col-xs-offset-4">
		<fieldset>
			<legend>Exercicio 18</legend>
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
				$arr = [];
				$arr2 = [];
				$i = 0;

				while ($i < 29) {
					$value = rand(1, 4);
					$doubleValue = $value * 2;

					array_push($arr, $value);
					array_push($arr2, $doubleValue);

					$i++;
				}
				foreach ($arr as $key => $value) {
					echo "A1: ".$value;
					echo "<strong> |</strong> A2: ".$arr2[$key]."<br> ";

				}
				echo $count;
			?>
		</div>
	</div>
</body>
</html>