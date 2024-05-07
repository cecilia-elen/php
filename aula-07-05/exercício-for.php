<?php

echo "<br>Aluno 1: <br>";
 
$aluno1 = array("<br>Cecília<br>",18,"<br>Minha casa<br>","Guanambi<br>",40020922);

echo "[for]: ";
for($a=0; $a<=(count($aluno1)-1); $a++){
    echo "$aluno1[$a]";
}   

   
echo "<br>Aluno 2: <br>";
$aluno2 = array("<br>Raifran<br>",18,"<br>a casa dele<br>","Pesqueiro<br>",454507);

echo "<br>[for]: ";
for($a=0; $a<=(count($aluno2)-1); $a++){
    echo "$aluno2[$a]";
}    


echo "<br>Professor: <br>";

$professor = array("<br>Fábio<br>",30,"<br>Um lugar<br>","Guanambi<br>",5000000);

echo "<br>[for]: ";
for($a=0;
 $a<=(count($professor)-1); $a++){
    echo "$professor[$a]";
}   
?>
