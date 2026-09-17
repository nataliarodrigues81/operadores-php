<?php
//ENTRADA
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
//PROCESSAMENTO
$adicao = $n1 + $n2;
$subtracao = $n1 - $n2;
$multiplicacao = $n1 * $n2;

$divisaoValida = $n2 != 0; // atribuir o resultado lógico na variavel
if ($divisaoValida) 
{
    $divisao = $n1 / $n2;
    $modulo = $n1 % $n2;
}

$potencia = $n1 ** $n2;
$concatenacao = $n1.$n2; // o ponto JUNTA o texto, não soma como número

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Operações Aritméticas</title>
</head>
<body>
    <div class="card">
        <h1 align="center">Operações Aritméticas</h1>
        <h2 align="center">Resultados</h>
        <hr>
        <!-- apresentar os resultados que o PHP gerou -->
        <h3>
            <?php echo "$n1 + $n2 = $adicao";?>
        </h3>
        <h3>
            <?php echo "$n1 - $n2 = $subtracao";?>
        </h3>
        <h3>
            <?php echo "$n1 x $n2 = $multiplicacao";?>
        </h3>
        <h3>
            <?php
                if ($divisaoValida==true) 
                {
                    echo "$n1 ÷ $n2 = ".number_format($divisao,2,',','.');
                    echo "<br>";
                    echo "$n1 modulo $n2 = ".number_format($modulo,2,',','.');
                } else 
                {
                    echo "<h1>Não há divisão por zero</h1>";
                }
             ?>
        </h3>
        <h3>
            <?php echo "$n1 <sup> $n2 </sup> = ".number_format($potencia,2,',','.');?>
        </h3>
        <h3>
            <?php echo "$n1 concatenando $n2 = $concatenacao" ?>;
        </h3>
        
        <a href="index.php">Voltar</a>

        

    </div>
</body>
</html>