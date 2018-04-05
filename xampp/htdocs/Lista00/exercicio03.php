<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 03 lista 01</title>
    </head>
    <body>
        <fieldset>
            <legend>Formulário</legend>
            <form action="#" method="POST">
                <label for="litros_">Litros gastos</label>
                <input type="number" name="litros" id="litros_">
                <label for="distancia_">Quilômetros percorridos</label>
                <input type="number" name="distancia" id="distancia_">
                <label for="preco_">Preço do combustivel</label>
                <input type="money_format" name="preco" id="preco_">
                <button type="submit">Enviar</button>
            </form>   
        </fieldset>

        <?php
        
            if(isset($_POST['litros']) && isset($_POST['distancia']) && isset($_POST['preco']) ) {
                
                $litros = $_POST['litros'];
                $distancia = $_POST['distancia'];
                $preco = $_POST['preco'];
                
                $gastos = ($litros * $preco) / $distancia;
                
                echo "O total de gastos com combustivel foi: $gastos";
            }
            ?>
    </body>
</html>