<?php
##permite acesso as variaves dentro do aquivo conexao
require_once('../conexao.php');

//ARRAY PARA GUARDAR ERROS E MOSTRAR NO FINAL
$erros = [];

##cadastrar  //CODIGO EXECUTADO, CASO O USUARIO ESCOLHER O FORMULARIO DE CADASTRAR
if(isset($_POST['cadastrar'])){
             

                //letra maisculo
                $nome =strtoupper($_POST["nomeprof"]);
              
                $idade = $_POST["idade"];
                //$email = $_GET["email"];
               
            //LIMPEZA DADOS
                $nome = filter_input(INPUT_POST, 'nomeprof', FILTER_SANITIZE_SPECIAL_CHARS);
                    
             //VALIDACÇAO
               if(!$idade = filter_input(INPUT_POST,'idade',FILTER_VALIDATE_INT)){
                    $erros[] = "idade deve ser um numero";
                }
                
                if($idade <= 18)  {
                    $erros[] =  "Digite uma idade maior ou igual a 18 anos";
                } 
                
                //SE ENCONTROU ERROS APRESENTA
                if ($erros) {
                       if(!empty($erros))
                          foreach ($erros as $erro){
                            echo "<li> $erro </li>";
                            }
               
                }
                //NÃO HOUVE ERROS FAZ INSERT NO BANCO DE DADOS
                else {         
                    ##codigo SQL
                    $sql = "INSERT INTO professor(nomeprof,idade) VALUES('$nome','$idade')";

                    ##junta o codigo sql a conexao do banco
                    $sqlcombanco = $conexao->prepare($sql);

                    ##executa o sql no banco de dados
                    if($sqlcombanco->execute())
                        {
                            echo "<script type='text/javascript'>
                                       confirm(' {$nome} foi Cadastrado  com sucesso ');
                                      window.location='../index.php';
                                  </script>";
                        }
                          
                    }
 } 
                   
        

        
#######alterar  //CODIGO EXECUTADO, CASO O USUARIO ESCOLHER O FORMULARIO DE ALTERAR
if(isset($_POST['update'])){


    ##dados recebidos pelo metodo POST
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $id = $_POST["id"];
    
   
      ##codigo sql
    $sql = "UPDATE  professor SET nomeprof= :nome, idade= :idade WHERE id= :id ";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
    $stmt->bindParam(':idade',$idade, PDO::PARAM_INT);
    $stmt->execute();
 

    //CASO INSERIU DADOS NO BD MOSTRA MENSAGEM
    if($stmt->execute())
        {
            echo " <strong>OK!</strong> o aluno
             $nome foi Alterado com sucesso!!!"; 

            echo " <button class='button'><a href='../index.php'>voltar</a></button>";
        }

}        


##Excluir  //CODIGO EXECUTADO, CASO O USUARIO ESCOLHER O FORMULARIO DE EXCLUIR
if(isset($_GET['excluir'])){
    //RECEBE E ARMAZENA ID DO PROFESSOR
    $id = $_GET['id'];

    //APAGA NO BANCO DE DADOS O PROFESSOR QUE TIVER O ID = $id recebida pelo metodo $_GET
    $sql ="DELETE FROM `professor` WHERE idprofessor={$id}";
    
    ##diz o paramentro e o tipo  do paramentros
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);
    ## executa o codigo SQL no BD
    $stmt->execute();

    ##se nao houve erros mostra menssagem
    if($stmt->execute())
        {
            echo " <strong>OK!</strong> o aluno
             $id foi excluido!!!"; 

            echo " <button class='button'><a href='listaalunos.php'>voltar</a></button>";
        }

}

        
?>

