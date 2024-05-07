<?php

$aluno1["nome"] = "Cecília";
$aluno1["idade"] = 18;
$aluno1["endereço"] = "Minha casa";
$aluno1["cidade"] = "Guanambi";
$aluno1["estado"] = "Bahia";
$aluno1["cpf"] = "40028922";


echo "Aluno 1: <br>";
foreach ($aluno1 as $a) {
    echo  key($aluno1) . ": $a  <br>";
    next($aluno1);
    }
    
$aluno2["nome"] = "Raifran";
$aluno2["idade"] = 18;
$aluno2["endereço"] = "";
$aluno2["cidade"] = "Pesqueiro";
$aluno2["estado"] = "Bahia";
$aluno2["cpf"] = "777";

echo "<br>Aluno 2: <br>";
foreach ($aluno2 as $c) {
    echo  key($aluno2) . ": $c  <br>";
    next($aluno2);
}
    
    
$professor["nome"] = "Fábio";
$professor["idade"] = 30;
$professor["endereço"] = "Um Lugar";
$professor["cidade"] = "Guanambi";
$professor["estado"] = "Bahia";
$professor["cpf"] = "000000000";

echo "<br>Professor: <br>";
foreach ($professor as $d) {
    echo  key($professor) . ": $d  <br>";
    next($professor);
} 
?>
