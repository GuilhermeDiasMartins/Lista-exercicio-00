 <!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Exercicio 9</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body align="center">
	<div class="col-xs-4 col-xs-offset-4">
		<fieldset>
			<legend>Exercicio 9</legend>
			<form action="#" method="post">
				<label for="numero_">Numero</label><br>
				<input type="number" name="ex9_int1"><br>

				<label for="numero_">Numero</label><br>
				<input type="number" name="ex9_int2"><br>
				
				<button type="submit" class="btn">Enviar</button>
			</form>
		</fieldset>
	</div>
	
	<div class="col-xs-4 col-xs-offset-4" style="margin-top: 2%">
		<P>Resultado:</P>
		<div class="jumbotron">
			<?php 
				if( isset($_POST['ex9_int1']) && isset($_POST['ex9_int2']) ) {
					$a = intval($_POST['ex9_int1']);
					$b = intval($_POST['ex9_int2']);
					echo "${a}/${b} = ".($a/$b)."<br>";
					echo "${a} = ".($a*$a)."<br>";
					echo "${b} = ".($b*$b*$b)."<br>";
				}
			?>
		</div>
	</div>
</body>
</html>