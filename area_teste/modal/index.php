<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="validator.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
    </head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <form class="formulario" method="post" action="salvar.php"> 
        <h3 id="title">Insira suas informações abaixo</h3>
            <div class="field">
                <label for="nome">Nome da empresa:</label>
                <input type="text" id="nomeEmpresa" name="nomeEmpresa" placeholder="Digite o nome da empresa*" >
            </div>
            <div class="field">
                <label for="nome">Endereço da empresa:</label>
                <input type="text" id="enderecoEmpresa" name="enderecoEmpresa" placeholder="Digite o endereço da empresa*">
            </div>
            <div class="field">
                <label for="nome">CNPJ:</label>
                <input type="number" id="cnpjEmpresa" name="cnpjEmpresa" placeholder="Digite o CNPJ da empresa*">
            </div>
            <div class="field">
                <label for="nome">Inscrição estadual:</label>
                <input type="number" id="inscricaoEmpresa" name="inscricaoEmpresa" placeholder="Digite a inscrição estadual da empresa*" >
            </div>
            <div class="field">
                <label for="nome">Nome do representante:</label>
                <input type="text" id="nomeRepresentante" name="nomeRepresentante" placeholder="Digite a inscrição estadual da empresa*">
            </div>
            <div class="field">
                <label for="nome">CPF do representante legal:</label>
                <input id="cpf" type="text" name="cpf" maxlength="11" onblur="return verificarCPF(this.value)">
            </div>
            <div class="field">
                <label for="email">E-Mail:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu E-Mail*" >
            </div>
            <input type="submit" id="salvar" name="acao" value="ABRIR MINUTA DO CONTRATO" disabled>
            <form method="post" action="salvar.php">
        
            </form>
    </form>
  <script>
    $(document).ready(function(){
    $('#email').on('input', function(){
      $('#salvar').prop('disabled', $(this).val().length < 3);
    });
  });
  </script>
</body>
</html>
