<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercicio 00 lista 01</title>
</head>
<body>
<fieldset>
    <legend>Formulário</legend>
    <form action="#" method="post">
            <label for="valor_">Insina valor para calculo do desconto</label>
            <input type="number" name="valor" id="valor_">
            <button type="submit">Enviar</button>
    </form>
</fieldset>
   
        <?php
            if(isset($_POST['valor'])){
            $valor = $_POST['valor'];
            $desconto = $valor - 0.9; 
            
            echo ("o valor de desconto é: $desconto");
            
            }
         ?>
</body>
</html>
    
    


