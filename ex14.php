 <!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Exercicio 14 </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body align="center">
	<div class="col-xs-4 col-xs-offset-4">
		<fieldset>
			<legend>Exercicio 14</legend>
			<form action="#" method="post">
				<input type="number" name="ex14_int1" placeholder="Salario base"><br>
				<input type="number" name="ex14_int2" placeholder="Reajuste em %"><br>

				<button type="submit" class="btn">Enviar</button>
			</form>
		</fieldset>
	</div>
	
	<div class="col-xs-4 col-xs-offset-4" style="margin-top: 2%">
		<P>Resultado:</P>
		<div class="jumbotron">
			<?php 
				if( isset($_POST['ex14_int1']) && isset($_POST['ex14_int2'])) {
					$a = intval($_POST['ex14_int1']);
					$b = intval($_POST['ex14_int2']);
					$b = 1+($b/100);
					echo ($a*$b);
				}
			?>
		</div>
	</div>
</body>
</html>