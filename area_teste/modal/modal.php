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

    <form class="modal-content" method="post" action="salvar.php"> 
        <h3 id="title">Insira suas informações abaixo</h3>
            <div class="field">
                <label for="nome">Nome da empresa:</label>
                <input type="text" id="nomeEmpresa" name="nomeEmpresa" placeholder="Digite o nome da empresa*" required>
            </div>
            <div class="field">
                <label for="nome">Endereço da empresa:</label>
                <input type="text" id="enderecoEmpresa" name="enderecoEmpresa" placeholder="Digite o endereço da empresa*" required>
            </div>
            <div class="field">
                <label for="nome">CNPJ:</label>
                <input type="number" id="cnpjEmpresa" name="cnpjEmpresa" placeholder="Digite o CNPJ da empresa*" required>
            </div>
            <div class="field">
                <label for="nome">Inscrição estadual:</label>
                <input type="number" id="inscricaoEmpresa" name="inscricaoEmpresa" placeholder="Digite a inscrição estadual da empresa*" required>
            </div>
            <div class="field">
                <label for="nome">Nome do representante:</label>
                <input type="text" id="nomeRepresentante" name="nomeRepresentante" placeholder="Digite a inscrição estadual da empresa*" required>
            </div>
            <div class="field">
                <label for="nome">CPF do representante legal:</label>
                <input id="cpf" type="text" name="cpf" maxlength="11" onblur="return verificarCPF(this.value)" require>
            </div>
            <div class="field">
                <label for="email">E-Mail:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu E-Mail*" >
            </div>
            
            <input type="submit" onclick="document.getElementById('id01').style.display='block'" id="btnmodal" name="acao" value="ABRIR MINUTA DO CONTRATO">        
    </form>
    <div id="id01" class="modal">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
        <!-- <form class="modal-content" method="post" action="salvar.php" > -->
                <div class="container">
                  <h1>INSTRUMENTO PARTICULAR DE CONTRATO DE PATROCÍNIO</h1>
                  <p></p>
            
            
            Pelo presente instrumento particular, as partes <?php $nm_empresa = $_POST["nomeEmpresa"]; if($nm_empresa != null){echo $nm_empresa; } ?>, empresa com sede na <?php $ds_endereco = $_POST["enderecoEmpresa"]; if($ds_endereco != null){echo $ds_endereco; } ?>, inscrita no CNPJ <?php $cd_cnpj = $_POST["cnpjEmpresa"]; if($cd_cnpj != null){echo $cd_cnpj; } ?>,
             doravante denominada simplesmente <b>PATROCINADOR</b>, em nome de seu representante legal, <?php $nm_representante = $_POST["nomeRepresentante"]; if($nm_representante != null){echo $nm_representante; } ?> , CPF nº <?php $cd_cpf = $_POST["cpf"]; if($cd_cpf != null){echo $cd_cpf; } ?>, e de outro, o <b>INSTITUTO HISTÓRICO E GEOGRÁFICO DE SANTOS</b>, entidade civil, com personalidade jurídica 
             de direito privado, sem fins Conselheiro Nébias, 689, Boqueirão, Santos, SP, CEP 11045-003, doravante designada simplesmente <b>PATROCINADA</b>, neste ato representada pelo seu Presidente, Sergio Willians dos Reis, brasileiro, jornalista, CPF nº 074.188.538-74, residente e domiciliado em Santos/SP, têm justo e acordado as cláusulas e condições abaixo:
            
            <h2>CLÁUSULA PRIMEIRA: Do objeto</h2>
            
            O presente contrato tem por objeto a concessão de Patrocínio à <b>PATROCINADA</b> dentro do Programa intitulado “100 POR SANTOS”, que tem por objetivo custear a operação do programa de digitalização de acervos históricos (jornais, revistas e outros documentos) da região da Baixada Santista.
            
            <h2>CLÁUSULA SEGUNDA: Do valor</h2>
            
            Em consonância com o plano de comercialização de patrocínios que declara conhecer, o <b>PATROCINADOR</b> opta em participar do programa “100 POR SANTOS” contribuindo com a quantia de <b>R$ 4.800,00 (quatro mil e oitocentos reais), dividida em 24 parcelas mensais de R$ 200,00 (Duzentos Reais).</b>
            
            <b>Parágrafo Primeiro:</b> O valor mensal pode ser depositado em conta corrente no nome do Instituto Histórico e Geográfico de Santos ou por meio de pagamento por boleto bancário, ficando a opção a critério do PATROCINADOR.
            
            <b>Parágrafo Segundo:</b> Se a opção for por depósito em conta corrente, o mesmo deve ser feito em nome do INSTITUTO HISTÓRICO E GEOGRÁFICO DE SANTOS - CNPJ. 58.250.358/0001-52, no banco:
            SICREDI (748) - AGÊNCIA 0727 - C/C 11991-8
            
            <b>Parágrafo Terceiro:</b> O <b>PATROCINADOR</b> pode optar em contribuir com valores maiores em intervalos menores, a critério dele.
            
            <h2>CLÁUSULA TERCEIRA:     Da contrapartida.</h2>
            
            <h4><b>3.1</b> – De conformidade com o mencionado plano de comercialização de patrocínios, o <b>PATROCINADOR</b> fará jus às seguintes contrapartidas:</h4>
            <h4><b>3.1.1</b>	- Aplicação da logomarca do parceiro em mural na sala de digitalização;</h4>
            <h4><b>3.1.2</b>	- Aplicação da logomarca do parceiro no site do Instituto Histórico e Geográfico de Santos, em página específica do projeto “100 Por Santos”;</h4>
            <h4><b>3.1.3</b>	- Aplicação da logomarca do parceiro em algumas postagens nas redes sociais;</h4>
            <h4><b>3.1.4</b>	- Aplicação da logomarca do parceiro em eventuais vídeos produzidos sobre o projeto e sobre o processo de digitalização;</h4>
            <h4><b>3.1.5</b>	- 100 Revistas Almanaque de Santos (25 de cada edição) para que o parceiro possa distribuir para seus funcionários e clientes;</h4>
            <h4><b>3.1.6</b>	- 8 Baralhos do Jogo “A História de Santos - Cartas Colecionáveis”, para que o parceiro possa distribuir para seus funcionários e clientes;</h4>
            <h4><b>3.1.7</b>	- Artigo sobre a história da empresa parceira (em data dentro do prazo do contrato) para ser postado no Blog Memória Santista;</h4>
            
            <h2>CLÁUSULA QUARTA:  Da Vigência</h2>
            
            A vigência do presente contrato é de 24 (Vinte e Quatro) meses, iniciando o mesmo na data de sua assinatura.
            
            
          <h2>CLAÚSULA QUINTA:   Da Rescisão </h2>
            
            Este contrato de patrocínio poderá ser denunciado por qualquer das partes, sem gerar qualquer ônus, mediante comunicação por escrito com antecedência mínima de 30 (trinta) dias.
            
            
            
          <h2>CLÁUSULA SEXTA – Das responsabilidades</h2>
            
            O uso da marca do <b>PATROCINADOR</b> é transitório e subordinado ao cumprimento das cláusulas deste contrato, não podendo ser vinculada a outra forma ou propósito que não se aplique a este contrato.
            
          <h2>CLÁUSULA SÉTIMA – DO FORO</h2>
            
            <h4>Fica eleito o foro da comarca de Santos/SP, para dirimir conflitos oriundos do presente Contrato, com a exclusão de qualquer outro, por mais privilegiado que seja.
            
            E, para que o presente instrumento produza os efeitos legais e de direito as partes, de comum acordo, firmam o presente contrato em duas vias de igual teor.
            
            
            Santos, dia <?php echo date('d'); ?> de 
            <?php  
            
            if(date('m') == '1'){echo "janeiro";}
            if(date('m') == '2'){echo "fevereiro";}
            if(date('m') == '3'){echo "março";}
            if(date('m') == '4'){echo "abril";}
            if(date('m') == '5'){echo "maio";}
            if(date('m') == '6'){echo "junho";}
            if(date('m') == '7'){echo "julho";}
            if(date('m') == '8'){echo "agosto";}
            if(date('m') == '9'){echo "setembro";}
            if(date('m') == '10'){echo "outubro";}
            if(date('m') == '11'){echo "novembro";}
            if(date('m') == '12'){echo "dezembro";}
            
            ?> 
            de <?php echo date('Y'); ?> </h4>
            
           <br> 
            __________________________________
            <br>Instituto Histórico e Geográfico de Santos<br>
            Sergio Willians dos Reis - presidente
            <br>
            <br>
            <u><?php $nm_representante = $_POST["nomeRepresentante"]; if($nm_representante != null){echo $nm_representante; } ?>      </u>
            <br><b><?php $nm_representante = $_POST["nomeRepresentante"]; if($nm_representante != null){echo $nm_representante; } ?> </b>
            <br>  Empresa Patrocinadora
            <br>
            
                
                  <div class="clearfix">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">CANCELAR</button>
                    <input type="submit" onclick="document.getElementById('id01').style.display='none'" id="btnassinar" value="ASSINAR"> 
                </div>
       <!-- </form> -->
            </div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

//$(document).ready(function(){
  //$('#email').on('input', function(){
    //$('#id01').prop('disabled', $(this).val().length < 3);
  //});
//});
</script>



</body>
</html>
