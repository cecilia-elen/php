<?php
##permite acesso as variaves dentro do aquivo conexaO
require_once('../conexao.php');

//ARRAY PARA GUARDAR ERROS E MOSTRAR NO FINAL
$erros = [];

##cadastrar  //CODIGO EXECUTADO, CASO O USUARIO ESCOLHEU O FORMULARIO DE CADASTRAR
if(isset($_POST['cadastrar'])){
                ##dados recebidos pelo metodo POST

                //letra maisculo
                $nome =strtoupper($_POST["nome"]);
              
                $carga_horaria = $_POST["carga_horaria"];
                $idprofessor = $_POST["idprofessor"];
                $curso = $_POST["curso"];

               
            //LIMPEZA DADOS
                $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
                    
             //VERIFICA SE EXISTE O PROFESSOR
               if($idprofessor){
                $sql = $conexao->prepare('SELECT * FROM professor where idprofessor = :idprofessor');
                $sql->bindParam(':idprofessor',$idprofessor, PDO::PARAM_INT);
                $sql-> execute();

                if($sql->rowcount()>0){
                    $sql = "INSERT INTO disciplina(nomedisciplina,carga_horaria,idprofessor, curso) VALUES('$nome','$carga_horaria','$idprofessor', '$curso')";

                    $sqlcombanco = $conexao->prepare($sql);

                    if($sqlcombanco->execute())
                        {
                            echo "<script type='text/javascript'>
                                       confirm(' {$nome} foi Cadastrado  com sucesso ');
                                      window.location='../index.php';
                                  </script>";
                        }
                        
                    }
                }if($sql->rowcount() === 0){
                            
                   $erros[] ="o ID do professor não existe!";
                    }

                //SE ENCONTROU ERROS APRESENTA
                if ($erros) {
                       if(!empty($erros))
                          foreach ($erros as $erro){
                            echo "<li> $erro </li>";
                            }
                
                }
                //NÃO HOUVE ERROS FAZ INSERT NO BANCO DE DADOS
                
 } 
                   
        

        
#######alterar   //CODIGO EXECUTADO, CASO O USUARIO ESCOLHER O FORMULARIO DE ALTERAR
if(isset($_POST['update'])){


    $iddisciplina = $_POST['iddisciplina'];
    $nome = $_POST["nome"];
    $carga_horaria = $_POST["carga_horaria"];
    $idprofessor = $_POST["idprofessor"];
    $curso = $_POST["curso"];

   
      ##codigo sql
    $sql = "UPDATE  disciplina SET nomedisciplina= :nome, carga_horaria= :carga_horaria, idprofessor= :idprofessor, curso= :curso  WHERE iddisciplina= :iddisciplina";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':iddisciplina',$iddisciplina, PDO::PARAM_INT);
    $stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
    $stmt->bindParam(':curso',$curso, PDO::PARAM_STR);
    $stmt->bindParam(':carga_horaria',$carga_horaria, PDO::PARAM_INT);
    $stmt->bindParam(':idprofessor',$idprofessor, PDO::PARAM_INT);

    $stmt->execute();
 

    //CASO INSERIU DADOS NO BD MOSTRA MENSAGEM
    if($stmt->execute())
        {
            echo " <strong>OK!</strong> A disciplina foi Alterada com sucesso!!!"; 

            echo " <button class='button'><a href='../index.php'>voltar</a></button>";
        }

}        


##Excluir   //CODIGO EXECUTADO, CASO O USUARIO ESCOLHER O FORMULARIO DE EXCLUIR
if(isset($_GET['excluir'])){
    
    //RECEBE E ARMAZENA ID DO ALUNO
    $iddisciplina = $_GET['iddisciplina'];

    //APAGA NO BANCO DE DADOS O ALUNO QUE TIVER O ID = $id recebida pelo metodo $_GET
    $sql ="DELETE FROM `disciplina` WHERE iddisciplina={$iddisciplina}";

    ##diz o paramentro e o tipo  do paramentros
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
      ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);
     ## executa o codigo SQL no BD
    $stmt->execute();


    ##se nao houve erros mostra menssagem
    if($stmt->execute())
        {

            echo " <strong>OK!</strong> A disciplina foi excluida!!!"; 

            echo " <button class='button'><a href='../index.php'>voltar</a></button>";
        }

}

        
?>

