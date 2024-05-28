

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<pre>
<?php

function funcConsts() {

echo "Nome do arquivo: <br>" .__FILE__. "<br>";
echo "Diretório do arquivo: <br>" .__DIR__. "<br>";
echo "Linha atual desse echo: <br>" .__LINE__. "<br>";
echo "Nome da função executada: <br>" .__FUNCTION__. "<br>";


}

funcConsts();
?>
</pre>

<pre>
<?php

class pessoas{
    private $tipodepessoas;
    function __construct() {
        echo "Nome da classe <br>" .__CLASS__."<br>";
    }
function setpessoas($tipodepessoas) { $this->tipodepessoas = $tipodepessoas;
    echo "Nome da método executada: <br>" .__METHOD__. "<br>";}
} 
  $obj = new pessoas();
   $obj->setpessoas("brava");

    ?>

</pre>


<pre>
    <?php

    function soma(){
$Valor1 = 33434354;
$Valor2 = 82341474;
$soma = $Valor1 + $Valor2;
return $soma;

    }
    echo " O resultado final é " .soma();
    ?>
    </pre>

    <pre>
<?php
    function somacomparametros($P1, $P2){
    
    $P3= $P1 + $P2;
    echo "O valor da soma com parametros é $P3 <br>";
    }
  somacomparametros(9897987897897, 9);
  somacomparametros(2, elevaquadrado(4));
    ?>
   
</pre>

<pre>
    <?php
    function somamultiplica($M1, $M2, $M3){

        $M4 = $M1 + $M2;
        $M5 = $M4*$M3;
        echo "o resultado dessas operações é $M5";
    }

    somamultiplica(1,1,2);
    ?>
</pre>


<pre>
    <?php

    function exemplo($soma1, $soma2){
        $resultadosoma = $soma1 + $soma2;
        $resultadomultiplicacao = $resultadosoma*$soma2;
        $resultadosubtracao = $resultadomultiplicacao - $soma1;
        $resultadofinal = $resultadosubtracao/$soma2;
     return $resultadofinal;
    }
 echo " O resultado final é <br>" .exemplo(1,4);
     
    ?>
</pre>

<pre>
    <?php

    function elevaquadrado($num2){
        $resultadu = $num2**$num2;
     return $resultadu;
    }
 echo " O resultado final é <br>" .elevaquadrado(4);
     
    ?>
</pre>
</body>
</html>