<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "instituto";    
    
    $conecta = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    if(!$conecta){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
        echo "Conexao realizada com sucesso";
        
        // obtendo os valores digitados
        $nm_empresa = $_POST["nomeEmpresa"];
        $ds_endereco = $_POST["enderecoEmpresa"];
        $cd_cnpj = $_POST["cnpjEmpresa"];
        $cd_inscricao = $_POST["inscricaoEmpresa"];
        $cd_cpf = $_POST["cpfRepresentante"];
        $email = $_POST["email"];

        // insert no banco de dados
        $result = ("INSERT INTO tb_patrocinador (cd_cnpj ,cd_cpf_representante, nm_empresa,
                                                ds_endereco, cd_inscricao) 
                                    VALUES ('$cd_cnpj', 
                                            '$cd_cpf',
                                            '$nm_empresa',
                                            '$ds_endereco',
                                            '$cd_inscricao')"); 
    }   
    if ($conecta->query($result) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $result . "<br>" . $conecta->error;
      }
?> 