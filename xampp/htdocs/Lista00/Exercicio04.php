<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 04 - lista 01</title>
    </head>
    <body>
        <fieldset>
            <legend>Formlário</legend>
            <form action="#" method="POST">
                <label for="quantidade_">Quantidade de carros vendidos</label>
                <input type="number" name="quantidade" id="quantidade_">
                <button type="submit">Enviar<button>
            </form>
           
            <?php
            
            if(isset($_POST['quantidade']) ) {
            
                $quantidade = $_POST['quantidade'];
                
                $total = ($quantidade * 300) + 800;
      
                echo "A salario total é: $total";
            }
            
            ?>
    </body>
</html>