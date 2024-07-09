<?php
echo "<div style='background-color:grey'>";
 echo "formulario - post dados";
echo "</div>";
 function obterDados($post) {
 $dados = $post['cpf']." - ".$post['nome'];
 echo "<script> alert('".$dados."') </script>";
 }
?>