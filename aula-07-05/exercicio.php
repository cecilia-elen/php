<?php

$alunos = array("kailla", "mariana", "bruna", "diamilli",
 "maria antonia", "raifran", "ivan", "gustavo", "sarah");

echo "exemplo com for <br>";
for($i=0; $i<(count($alunos));$i++){
    if($i == 4){
        echo $i;
        echo "$alunos[$i]<br>";

    }
 }
    echo "exemplo com foreach <br>";
    foreach($alunos as $dados){
        echo "$dados <br>";
   
}

?>
