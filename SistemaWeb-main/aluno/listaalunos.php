<?php 
/*
 * Melhor prática usando Prepared Statements
 * 
 */
include_once("../header.php");

##permite acesso as variaves dentro do aquivo conexao
  require_once( '../conexao.php');

  
// executa SQL no BD e seleciona todos os ALUNOS
  $retorno = $conexao->prepare('SELECT * FROM aluno');

    //armazena dados de todos os ALUNOS em um array
  $retorno->execute();

?>       

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles.css">
  <title>Document</title>
</head>
<body>
  <div class="fundo"><div class="fundotabela">
<table> 
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>IDADE</th>
                    <th>DATA NASCIMENTO</th>
                    <th>ENDEREÇO</th>
                    <th>STATUS</th>
                </tr>
            </thead>

            <tbody>
                <tr><!--pega linha por linha do array $retorno e coloca na variavel $value  --> 
                    <?php foreach($retorno->fetchall() as $value) { ?>
                        <tr>
                            <td> <?php echo $value['id'] ?>   </td> 
                            <td> <?php echo $value['nome']?>  </td> 
                            <td> <?php echo $value['idade']?> </td> 
                            <td> <?php echo $value['datanascimento']?> </td> 
                            <td> <?php echo $value['endereco']?> </td> 
                            <td> <?php echo $value['estatus']?> </td> 

                            <td><!-- codigo para alterar aluno escolhido, enviar via post para o form Altaluno.php -->
                               <form method="POST" action="altaluno.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="alterar" class="botao" type="submit">Alterar</button>
                                </form>

                             </td> 

                             <td><!-- codigo para excluir aluno escolhido, enviar via get para excluir no crudaluno.php -->
                               <form method="GET" action="crudaluno.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="excluir" class="botao" type="submit">Excluir</button>
                                </form>

                             </td> 


                       
                      </tr>
                    <?php  }  ?> 
                 </tr>
            </tbody>
        </table>
      </div>
      </div>
  
</body>
</html>
       
<?php         
   echo "<button class='button button3'><a href='../index.php'>voltar</a></button>";
include_once("../footer.php");
?>