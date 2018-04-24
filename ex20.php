<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Exercicio 20</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body align="center">
	<div class="col-xs-4 col-xs-offset-4">
		<fieldset>
			<legend>Exercicio 20</legend>
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
				function bubbleSort($array)
				{
				  for($i = 0; $i < count($array); $i++)
				  {
				     for($j = 0; $j < count($array) - 1; $j++)
				     {
				       if($array[$j] > $array[$j + 1])
				       {
				         $aux = $array[$j];
				         $array[$j] = $array[$j + 1];
				         $array[$j + 1] = $aux;
				       }
				     }
				  }
				  return $array;
				}

				$arr = [];
				$i = 0;

				while ($i < 15) {
					$numberValue = rand(1, 250);
					array_push($arr, $numberValue);

					$i++;
				}

				$arr = bubbleSort($arr);
				// var_dump($arr)
				foreach ($arr as $key => $numberValue) {
					echo $numberValue."<br>";

				}
			?>
		</div>
	</div>
</body>
</html>