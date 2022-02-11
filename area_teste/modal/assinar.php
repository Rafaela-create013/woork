<?php
$servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "instituto";    
    
    $conecta = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    if(!$conecta){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{

        session_start();

        $nm_empresa =  $_SESSION['nomeEmpresa'];
        $ds_endereco=$_SESSION['enderecoEmpresa']; 
        $cd_cnpj = $_SESSION['cnpjEmpresa'] ; 
        $cd_inscricao = $_SESSION['inscricaoEmpresa'] ;
        $nm_representante = $_SESSION['nomeRepresentante'] ;
        $cd_cpf = $_SESSION['cd_cpf'];
        $email = $_SESSION['email'];

      //insert no banco de dados - FAZER SOMENTE APOS ASSINATURA NA TELA CONTRATO.PHP
       $result = ("INSERT INTO tb_patrocinador (cd_cnpj, cd_cpf_representante, nm_empresa,
                                                ds_endereco, cd_inscricao, nm_representante) 
                                    VALUES ('$cd_cnpj', 
                                            '$cd_cpf',
                                           '$nm_empresa',
                                           '$ds_endereco',
                                            '$cd_inscricao',
                                            '$nm_representante')"); 
    }   
    if (mysqli_query($conecta, $result)) {
        echo "email enviado e dados salvos!";
      } else {
        echo "Error: " . $result . "<br>" . $conecta->error;
      }
     
mysqli_close($conecta);
?>