<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Exercicio 19</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body align="center">
	<div class="col-xs-4 col-xs-offset-4">
		<fieldset>
			<legend>Exercicio 19</legend>
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
					$numberValue = rand(1, 250);
					$letterValue = $numberValue < 100 ? 'a' : ( $numberValue == 100 ? 'b' : ( $numberValue < 200 ? 'c' : ($numberValue == 200 ? 'd' : 'e')) );

					array_push($arr, $numberValue);
					array_push($arr2, $letterValue);

					$i++;
				}

				foreach ($arr as $key => $numberValue) {
					echo "A1: ".$numberValue;
					echo "<strong> |</strong> A2: ".$arr2[$key]."<br> ";

				}
				echo $count;
			?>
		</div>
	</div>
</body>
</html>