<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Exercicio 13</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body align="center">
	<div class="col-xs-4 col-xs-offset-4">
		<fieldset>
			<legend>Exercicio 13</legend>
		</fieldset>
	</div>
	
	<div class="col-xs-4 col-xs-offset-4" style="margin-top: 2%">
		<P>Resultado:</P>
		<div class="jumbotron">
			<?php
			for($i = 1; $i <= 100; $i++):
				$quantidadeDeDivisores = 0;
				for($x = 1; $x <= $i; $x++): 
					
					if($i % $x == 0):
						$quantidadeDeDivisores++;
					endif;
				
				endfor;

				if($quantidadeDeDivisores == 2) { echo $i."<br>"; }
			endfor

			?>
		</div>
	</div>
</body>
</html>