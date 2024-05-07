<?php
echo " <br>exemplo 1<br>";
$var = array(1,2,3,4,5);

echo "<br>impressão 1 por 1<br>";
echo "$var[0] <br>";
echo "$var[1] <br>";
echo "$var[2] <br>";
echo "$var[3] <br>";
  echo "<br>impressão com [for]: <br>";
for($a=0; $a<=(count($var)-1); $a++){
   
    echo "$var[$a]<br>";}

echo "impressão com [foreach]: <br>";
foreach ($var as $chave => $dados) {
    
    echo "$chave = $dados<br>";
}





echo "<br>exemplo 2<br>";
$var1 = array(
    "0" => 30,
     "1" => 40,
      "2" => 60 );

      echo "<br>impressão 1 por 1<br>";
echo "$var1[0] <br>";
echo "$var1[1] <br>";
echo "$var1[2] <br>"; 


echo "<br>impressão com [for]: <br>";
for($i=0; $i<=(count($var1)-1); $i++){
    echo "$var1[$i]<br>";}

echo "<br>impressão com [foreach]: <br>";
foreach ($var1 as $chave => $dados) {
    echo "$chave = $dados<br>";
}



echo "<br>exemplo 3<br>";
$var2 = array( 0 => 5,
 6 => 8,
  9 => 15);
  $var2[1] = 20;

  echo "<br>impressão 1 por 1<br>";
echo "$var2[0] <br>";
echo "$var2[1]<br>";
echo "$var2[6] <br>";
echo "$var2[9] <br>";
$var2[0] = 4;
echo "$var2[0]<br>";


echo "<br>impressão com [for]: <br>";
for($w=0; $w<=9; $w++){
    echo "$var2[$w]<br>";}

echo "<br>impressão com [foreach]: <br>";
foreach ($var2 as $chave => $dados) {
    echo "$chave = $dados<br>";
}

?>

