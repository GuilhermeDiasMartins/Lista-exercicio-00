<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Exercicio 11</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body align="center">
	<div class="col-xs-4 col-xs-offset-4">
		<fieldset>
			<legend>Exercicio 11</legend>
			<form action="#" method="post">
				<label for="numero_">Numero</label><br>
				<input type="number" name="numero" ><br>

				<label for="numero_">Numero</label><br>
				<input type="number" name="numero_2" ><br>

				<button type="submit" class="btn">Enviar</button>
			</form>
		</fieldset>
	</div>
	
	<div class="col-xs-4 col-xs-offset-4" style="margin-top: 2%">
		<P>Resultado:</P>
		<div class="jumbotron">
			<?php
				if( isset($_POST['numero']) && isset($_POST['numero_2']) ) :
					$maior = $_POST['numero'] > $_POST['numero_2'] ? $_POST['numero'] : $_POST['numero_2'];
					$menor = $_POST['numero'] < $_POST['numero_2'] ? $_POST['numero'] : $_POST['numero_2'];

					 for ($i = $menor; $i <= $maior; $i++){
						echo ($i*$i)."<br>";
					}
				endif
			?>
		</div>
	</div>
</body>
</html>