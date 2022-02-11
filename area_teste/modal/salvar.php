<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "instituto";    
    
    $conecta = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    if(!$conecta){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
        
        // obtendo os valores digitados

        $nm_empresa = $_POST["nomeEmpresa"];
        $ds_endereco = $_POST["enderecoEmpresa"];
        $cd_cnpj = $_POST["cnpjEmpresa"];
        $cd_inscricao = $_POST["inscricaoEmpresa"];
        $nm_representante = $_POST["nomeRepresentante"];
        $cd_cpf = $_POST["cpf"];
        $email = $_POST["email"];
        
        session_start();
        $_SESSION['nomeEmpresa'] = $nm_empresa;
        $_SESSION['enderecoEmpresa'] = $ds_endereco;
        $_SESSION['cnpjEmpresa'] = $cd_cnpj; 
        $_SESSION['inscricaoEmpresa'] = $cd_inscricao;
        $_SESSION['nomeRepresentante'] = $nm_representante;
        $_SESSION['cd_cpf'] = $cd_cpf;
        $_SESSION['email'] = $email;
        
        header("Location:contrato.php");

      }
     
mysqli_close($conecta);
?> 