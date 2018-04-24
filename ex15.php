 <!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Exercicio 15 </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body align="center">
	<div class="col-xs-4 col-xs-offset-4">
		<fieldset>
			<legend>Exercicio 15</legend>
			<form action="#" method="post">
				<input type="number" name="ex15_int1" placeholder="Valor por hora"><br>
				<input type="number" name="ex15_int2" placeholder="Horas trabalhadas"><br>
				<input type="number" name="ex15_int3" placeholder="Desconto em %"><br>

				<button type="submit" class="btn">Enviar</button>
			</form>
		</fieldset>
	</div>
	
	<div class="col-xs-4 col-xs-offset-4" style="margin-top: 2%">
		<P>Resultado:</P>
		<div class="jumbotron">
			<?php 
				if( isset($_POST['ex15_int1']) && isset($_POST['ex15_int2']) && isset($_POST['ex15_int3']) ) {
					$a = intval($_POST['ex15_int1']);
					$b = intval($_POST['ex15_int2']);
					$c = ( intval($_POST['ex15_int3'])/100 );
					$salario = $a * $b;
					$salarioComDesconto = $salario - ($salario*$c);
					echo "R$".$salarioComDesconto;
				}
			?>
		</div>
	</div>
</body>
</html>