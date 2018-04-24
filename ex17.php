<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Exercicio 17</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body align="center">
	<div class="col-xs-4 col-xs-offset-4">
		<fieldset>
			<legend>Exercicio 17</legend>
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
			function validaCPF($cpf)
			{	
			    $cpf = str_pad(preg_replace('[^0-9]', '', $cpf), 11, '0', STR_PAD_LEFT);
				
			    if (strlen($cpf) != 11 || $cpf == '00000000000' || $cpf == '11111111111' || $cpf == '22222222222' || $cpf == '33333333333' || $cpf == '44444444444' || $cpf == '55555555555' || $cpf == '66666666666' || $cpf == '77777777777' || $cpf == '88888888888' || $cpf == '99999999999')
				{
				return false;
			    }
				else
				{   // Calcula os numeros para verificar se o CPF é verdadeiro
			        for ($t = 9; $t < 11; $t++) {
			            for ($d = 0, $c = 0; $c < $t; $c++) {
			                $d += $cpf{$c} * (($t + 1) - $c);
			            }
			 
			            $d = ((10 * $d) % 11) % 10;
			 
			            if ($cpf{$c} != $d) {
			                return false;
			            }
			        }
			 
			        return true;
			    }
			}

				if( isset($_POST['numero']) ) :
					$cpf = $_POST['numero'];
					if(validaCPF($cpf)){
						echo "CPF valido!";
					}else{
						echo "CPF invalido!";
					}

				endif
			?>
		</div>
	</div>
</body>
</html>