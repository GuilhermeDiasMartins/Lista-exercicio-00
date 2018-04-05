<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 05 lista 01</title>
    </head>
    <body>
        <fieldset>
            <legend>Formulário</legend>
            <form action="#" method="POST">
                <label for="eleitores_">Eleitores</label>
                <input type="number" name="eleitores" id="eleitores_">
                <label for="votosbrancos_">Votos Brancos</label>
                <input type="number" name="votosbrancos" id="votosbrancos_">
                <label for="votosnulos_">Votos Nulos</label>
                <input type="number" name="votosnulos" id="votosnulos_">
                <label for="votosvalidos_">Votos Validos</label>
                <input type="number" name="votosvalidos" id="votosvalidos_">               
                
                <button type="submit">Enviar</button>
            </form>   
        </fieldset>
        
        <!-- Codigo PHP -->
        
        <?php
        
            if(isset($_POST['eleitores']) &&
               isset($_POST['votosbrancos']) && 
               isset($_POST['votosnulos']) &&
               isset($_POST['votosvalidos'])) {
                
                $eleitores = $_POST['eleitores'];
                $vBrancos = $_POST['votosbrancos'];
                $vNulos = $_POST['votosnulos'];
                $vValidos = $_POST['votosvalidos'];
                
                $pBrancos = ($vBrancos / $eleitores) * 100;
                $pNulos = ($vNulos / $eleitores) * 100;
                $pValidos = ($vValidos / $eleitores) * 100;
                
                echo "O percentual de votos brancos foi: $pBrancos%<br>";
                echo "O percentual de votos nulos foi: $pNulos%<br>";
                echo "O percentual de votos validos foi: $pValidos%";
            }
            
        ?>
</body>
</html>