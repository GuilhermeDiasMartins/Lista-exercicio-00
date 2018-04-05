<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercicio 02 lista 01</title>
</head>
<body>
<fieldset>
    <legend>Formulário</legend>
    <form action="#" method="post">
            <label for="distancia_">Distancia</label>
            <input type="number" name="distancia" id="distancia_">
            <label for="litros_">Litros</label>
            <input type="number" name="litros" id="litros_">
            <button type="submit">Enviar</button>
    </form>
</fieldset>
           
           <!--Codigo PHP-->

        <?php
            if(isset($_POST['distancia']) && isset($_POST['litros'])) {

                $distancia = $_POST['distancia'];
                $litros = $_POST['litros'];

                #ConsumoMedio = Distancia / LitrosDeCombustivelConsumido

                $consumo = $distancia / $litros;

                echo "consumo é igual :  $consumo";
        }
                
        ?>
    </body>
</html>