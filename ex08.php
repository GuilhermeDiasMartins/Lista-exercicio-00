<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Exercicio 8</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body align="center">
	<div class="col-xs-4 col-xs-offset-4">
		<fieldset>
			<legend>Exercicio 8</legend>
			<form action="#" method="post">
				<label for="numero_">Sexo</label><br>
				<select name="sexo" >
					<option value="h">Homem</option>
					<option value="m">Mulher</option>
				</select><br><br>

				<label for="numero_">Altura</label><br>
				<input type="text" name="numero"><br>

				<button type="submit" class="btn">Enviar</button>
			</form>
		</fieldset>
	</div>
	
	<div class="col-xs-4 col-xs-offset-4" style="margin-top: 2%">
		<P>Resultado:</P>
		<div class="jumbotron">
			<?php
				class PesoIdeal
				{
					private $Altura;
					private $Sexo;

					function __construct($altura, $sexo)
					{
						$this->Altura = $altura;
						$this->Sexo = $sexo;
					}

					public function calculaPesoIdeal() {
						if($this->Sexo == "m"){
							return ((62.1 * $this->Altura) - 47);
						}else{
							return ((72.7 * $this->Altura) - 58);
						}
					}

				}



				if( isset($_POST['numero']) && isset($_POST['sexo']) ) :
					$altura = floatval($_POST['numero']);
					$sexo = $_POST['sexo'];

					$pessoa1 = new PesoIdeal($altura,$sexo); 
					echo "O peso ideal é: ".$pessoa1->calculaPesoIdeal();
				endif
			?>
		</div>
	</div>
</body>
</html>