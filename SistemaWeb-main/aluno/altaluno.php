<?php
include_once("../header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Document</title>
</head>
<body>

<?php
  //incluir arquivo de conexao com o BD
    require_once('../conexao.php');
 
    //armazena id 
   $id = $_POST['id'];

   ##sql para selecionar apens um aluno
   $sql = "SELECT * FROM aluno where id= :id";
   
   # junta o sql a conexao do banco
   $retorno = $conexao->prepare($sql);

   ##diz o paramentro e o tipo  do paramentros
   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

   #executa a estrutura no banco
   $retorno->execute();

  #transforma o retorno em array
   $array_retorno=$retorno->fetch();
   
   ##armazena retorno em variaveis
   $nome = $array_retorno['nome'];
   $idade = $array_retorno['idade'];
 
   
?>
 <!-- formulario para cadastrar aluno metodo post, enviar dados para form crudaluno.php -->
  <form method="POST" action="crudaluno.php">
       
        <input type="text" name="nome" id=""  value="<?php echo $nome ?>" >
                                                
        <input type="number" name="idade" id="" value="<?php echo $idade ?>" >
      
        <input type="hidden" name="id" id="" value="<?php echo $id ?>" >
        
        <input type="submit" name="update" value="Alterar">
  </form>
</body>
</html>
<?php
include_once("../footer.php");
?>
