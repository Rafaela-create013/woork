<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<style>
  /*------------------------------  MODAL ------------------------------*/
/* Set a style for all buttons */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
button {
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Float cancel and delete buttons and add an equal width */
.cancelbtn {
  float: left;
  width: 14rem;
  color: white;
  
}
.deletebtn{
  float: right;
  width: 14rem;
}

/* Add a color to the delete button */
.deletebtn {
  background-color: #00a950;
}

/* Add padding and center-align text to the container */
.container {
    padding: 35px;
    margin: 37px;
    text-align: justify;
    font-family: 'Poppins', sans-serif;
    font-size: 15px;
    border: 1px solid #ffbe0094;
}
h1{
  text-align: center;
}
h4{
  font-weight: lighter;
}
/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and delete button on extra small screens */
@media screen and (max-width: 1024px) {
  .cancelbtn {
    font-size: 0.9rem;
    width: 40%;
  }
  .deletebtn{
    font-size: 0.9rem;
    width: 40%;
  }
  .container{

  }
}
@media screen and (max-width: 768px) {
  .container {
    padding: 14px;
    margin: 4px;
    font-size: 12px;
  }
}
</style>
<body>
    <?php
        session_start();
        
    ?>

    <div class="container-back">
      <div class="container">
        <form action="assinar.php">                  
          <h1>INSTRUMENTO PARTICULAR DE CONTRATO DE PATROCÍNIO</h1>
                      <p></p>
                
                
                Pelo presente instrumento particular, as partes <?php  echo $_SESSION['nomeEmpresa']; ?>, empresa com sede na <?php echo $_SESSION['enderecoEmpresa'];?>, inscrita no CNPJ <?php ;  echo $_SESSION['cd_cpf']; ?>,
                doravante denominada simplesmente <b>PATROCINADOR</b>, em nome de seu representante legal, <?php echo $_SESSION['nomeRepresentante']; ?> , CPF nº <?php ;  echo $_SESSION['cd_cpf']; ?>, e de outro, o <b>INSTITUTO HISTÓRICO E GEOGRÁFICO DE SANTOS</b>, entidade civil, com personalidade jurídica 
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
                
                <p><b>3.1</b> – De conformidade com o mencionado plano de comercialização de patrocínios, o <b>PATROCINADOR</b> fará jus às seguintes contrapartidas:
                <p><b>3.1.1</b>	- Aplicação da logomarca do parceiro em mural na sala de digitalização;</p>
                <p><b>3.1.2</b>	- Aplicação da logomarca do parceiro no site do Instituto Histórico e Geográfico de Santos, em página específica do projeto “100 Por Santos”;</p>
                <p><b>3.1.3</b>	- Aplicação da logomarca do parceiro em algumas postagens nas redes sociais;</p>
                <p><b>3.1.4</b>	- Aplicação da logomarca do parceiro em eventuais vídeos produzidos sobre o projeto e sobre o processo de digitalização;</p>
                <p><b>3.1.5</b>	- 100 Revistas Almanaque de Santos (25 de cada edição) para que o parceiro possa distribuir para seus funcionários e clientes;</p>
                <p><b>3.1.6</b>	- 8 Baralhos do Jogo “A História de Santos - Cartas Colecionáveis”, para que o parceiro possa distribuir para seus funcionários e clientes;</p>
                <p><b>3.1.7</b>	- Artigo sobre a história da empresa parceira (em data dentro do prazo do contrato) para ser postado no Blog Memória Santista;</p>
                
                <h2>CLÁUSULA QUARTA:  Da Vigência</h2>
                
                A vigência do presente contrato é de 24 (Vinte e Quatro) meses, iniciando o mesmo na data de sua assinatura.
                
                
              <h2>CLAÚSULA QUINTA:   Da Rescisão </h2>
                
                Este contrato de patrocínio poderá ser denunciado por qualquer das partes, sem gerar qualquer ônus, mediante comunicação por escrito com antecedência mínima de 30 (trinta) dias.
                
                
                
              <h2>CLÁUSULA SEXTA – Das responsabilidades</h2>
                
                O uso da marca do <b>PATROCINADOR</b> é transitório e subordinado ao cumprimento das cláusulas deste contrato, não podendo ser vinculada a outra forma ou propósito que não se aplique a este contrato.
                
              <h2>CLÁUSULA SÉTIMA – DO FORO</h2>
                
                Fica eleito o foro da comarca de Santos/SP, para dirimir conflitos oriundos do presente Contrato, com a exclusão de qualquer outro, por mais privilegiado que seja.
                E, para que o presente instrumento produza os efeitos legais e de direito as partes, de comum acordo, firmam o presente contrato em duas vias de igual teor.
                <br>
                <br>
                <p style="text-align: right;"> Santos, dia <?php echo date('d'); ?> de 
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
                de <?php echo date('Y'); ?> 
                <br>
              <br> 
                __________________________________
                <br>Instituto Histórico e Geográfico de Santos<br>
                Sergio Willians dos Reis - presidente
                <br>
                <br>
                <u><?php ;  echo $_SESSION['nomeRepresentante']; ?> </u>
                <br><b><?php ;  echo $_SESSION['nomeRepresentante']; ?> </b>
                <br><b><?php ;  echo $_SESSION['nomeEmpresa']; ?> </b></p>
                <br>
                <br>
                
                    
                      <div class="clearfix">
                        <button type="button" class="cancelbtn">CANCELAR</button>
                        <button type="submit" class="deletebtn" value="ASSINAR">ASSINAR</button>
                </form>
        </div>
      </div>
</body>
</html>