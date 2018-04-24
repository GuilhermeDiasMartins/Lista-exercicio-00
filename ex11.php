 <!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Exercicio 11 </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body align="center">
	<div class="col-xs-4 col-xs-offset-4">
		<fieldset>
			<legend>Exercicio 11</legend>
			<form action="#" method="post">
				<label for="numero_">Numero</label><br>
				<input type="number" name="ex11_int1"><br>
				
				<button type="submit" class="btn">Enviar</button>
			</form>
		</fieldset>
	</div>
	
	<div class="col-xs-4 col-xs-offset-4" style="margin-top: 2%">
		<P>Resultado:</P>
		<div class="jumbotron">
			<?php 
				if( isset($_POST['ex11_int1']) ) {
					$a = intval($_POST['ex11_int1']);
					echo "Antecessor: ".($a-1)."<br>";
					echo "Sucessor: ".($a+1)."<br>";
				}
			?>
		</div>
	</div>
</body>
</html>