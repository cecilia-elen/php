<?php
echo "<div style='background-color:grey'>";
 echo "formulario - post dados";
echo "</div>";
 function obterDados($post) {
 $dados = $post['Produto']." - ".$post['Marca']. " - " .$post['Tamanho']. " - ".$post['Preço'];
 echo "<script> alert('".$dados."') </script>";
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<pre>

<table >
  <tr>
    <th>PRODUTO</th>
    <th>MARCA</th>
    <th>TAMANHO</th>
    <th>PREÇO</th>
  </tr>
  
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  </tr>

 
</table>

</pre>

</body>
</html>

