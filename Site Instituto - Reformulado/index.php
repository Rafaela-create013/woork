<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site do Instituto Histórico e Geográfico de Santos</title>
    <link rel="stylesheet" href="./Site do Instituto Histórico e Geográfico de Santos_files/style.css" type="text/css">
</head>
<body>
    <!-- Menu -->
    <div id="header">
			<div id="logo">
				<a href="http://ihgs.com.br/index.html"><img src="./Site do Instituto Histórico e Geográfico de Santos_files/logo.png" alt="LOGO"></a>
			</div>
			<ul id="navigation">
				<li class="selected">
					<a href="http://ihgs.com.br/index.html">PRINCIPAL</a>
				</li>
				<li>
					<a href="http://ihgs.com.br/oquee100porsantos.html">o que É?</a>
				</li>
				<li>
					<a href="http://ihgs.com.br/participe.html">PARTICIPE</a>
				</li>
				<li>
					<a href="http://ihgs.com.br/100porsantos.html">PARTICIPANTES</a>
				</li>
				<li>
					<a href="http://ihgs.com.br/contato100porsantos.html"> CONTATO</a>
				</li>
			</ul>
	</div>

    <!-- Content -->
    <div id="contents">
		<div>
			<div class="body" id="about">
                <h1><div align="center">
                        <p>&nbsp;</p>
                        <table width="800" border="0">
                            <tbody>
                                <tr>
                                    <td align="center"><img src="./Site do Instituto Histórico e Geográfico de Santos_files/logo100porsantos.jpg" width="300" height="186" align="center" alt=""></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </h1>			  
			  <br>
			  <table width="800" border="0" align="center">
			    <tbody>
			      <tr>
			        <td align="center"><h2>O Conceito Colmeia</h2>
		            <p>A história já provou inúmeras vezes que a união faz a força. A humanidade já superou em vários momentos situações adversas com a simples junção dos esforços de pessoas e empresas. É o Conceito Colmeia. Enquanto for difícil equacionar a situação com um número restrito de agentes (vamos chamá-los de abelhas), se esse número de abelhas for muito maior, o esforço individual é menor. </p>
		            <p>Vamos explicar de modo prático e dentro do que precisamos para este projeto. Hoje, para viabilizar a operação de digitalização, que envolve salário dos operadores, dos organizadores, dos custos de luz, de nuvem para a guarda dos arquivos digitais, dos equipamentos auxiliares (computadores, hds externos, etc), da preparação dos acervos (pois muitos jornais estão em estado lastimável de conservação, daí a importância de digitaliza-los), entre outros, precisamos de R$ 20 mil reais mensais, por dois anos, que é a meta para concluir a operação das duas milhões de páginas, o que dá uma média de 4 mil páginas por dia (trabalhando 500 dias), ou 666 páginas por hora, numa jornada de seis horas por dia.  É uma tarefa gigante, mas substancialmente necessária.</p>
		            <p>Pois bem, se formos captar o apoio de R$ 20 mil com 10 empresas, que chegou a ser uma ideia inicial, cada empresa teria de aportar R$ 2 mil mensais. Isso faria com que cada empresa, ao final dos dois anos, dispensasse R$ 48 mil de seu caixa. Sinceramente era muito possível isso, mas diante do quadro econômico nacional e das demandas dentro das empresas, logo percebemos que esse não era o caminho. Então pensamos: por que não juntarmos as forças, como uma grande colmeia, onde cada um dispensaria um valor quase simbólico? Além do mais, a tarefa, dividida entre bem mais participantes, proporcionaria o sentimento de coletividade mais firme em torno de uma causa tão relevante. </p></td>
		          </tr>
			      <tr>
			        <td align="center"><img src="./Site do Instituto Histórico e Geográfico de Santos_files/colmeia.jpg" width="800" height="491" alt=""></td>
		          </tr>
			      <tr>
			        <td align="center">&nbsp;</td>
		          </tr>
			      <tr>
			        <td align="center"><h4>Missão Compartilhada</h4>
			          <p>Assim, nasceu a ideia do 100 Por Santos, 100% Santos e Sua Memória. Dividido por 100, o custo mensal se fragmentaria em cotas de R$ 200,00, o que, ao final, faria com que cada empresa tivesse dispensado R$ 4.800,00 (em 24 meses). Este seria o verdadeiro sentido da união faz a força. E importante ressaltar que este é um trabalho com começo, meio e fim (mesmo porque depois de digitalizar todos os jornais e revistas, nossa missão estará cumprida).</p>
			          <h4>Vínculo jurídico</h4>
		            <p>O vínculo jurídico da empresa participante com o Instituto Histórico e Geográfico de Santos se dará por meio de contrato de patrocínio, com prazo de 24 meses, sem prorrogação. O repasse do recurso se dará da forma que mais convier ao apoiador, seja por depósito em conta ou pagamento de boleto bancário.</p>
                    <p>Abaixo encontra-se um formulário para a inserção de informações pertinentes da empresa parceira ao contrato, onde após ser preechido direcionará para a tela com a minuta do contrato
                   em PDF. O mesmo será encaminhado para o email ihgs@ihgs.com.br para qualificação.</p>
						<form class="formulario" method="post" action="salvar.php"> 
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
									<input type="text" id="inscricaoEmpresa" name="inscricaoEmpresa" placeholder="Digite a inscrição estadual da empresa*" required>
								</div>
								<div class="field">
									<label for="nome">CPF do representante legal:</label>
									<input type="number" id="cpfRepresentante" name="cpfRepresentante" placeholder="CPF do representante legal da empresa*" required>
								</div>
								<div class="field">
									<label for="email">E-Mail:</label>
									<input type="email" id="email" name="email" placeholder="Digite seu E-Mail*" required>
								</div>
								
									<input type="submit" name="acao" value="ENVIAR">
						</form>

		          </tr>
			      <tr>
			        <td align="center"><h4>Contrapartidas</h4>
			          <p>Obviamente não desejamos uma parceria de uma única via. Participando do projeto, ou seja, fazendo parte desta colmeia, o Instituto Histórico e Geográfico de Santos oferecerá em contrapartida:</p>
			          <p>•	Aplicação da logomarca do parceiro em mural na sala de digitalização;<br>
			            •	Aplicação da logomarca do parceiro no site do Instituto Histórico e Geográfico de Santos, em página específica do projeto “100 Por Santos”;<br>
			            •	Aplicação da logomarca do parceiro em algumas postagens nas redes sociais;<br>
			            •	Aplicação da logomarca do parceiro em eventuais vídeos produzidos sobre o projeto e sobre o processo de digitalização;<br>
			            •	100 Revistas Almanaque de Santos (25 de cada edição) para que o parceiro possa distribuir para seus funcionários e clientes;<br>
			            •	8 Baralhos do Jogo “A História de Santos - Cartas Colecionáveis”, para que o parceiro possa distribuir para seus funcionários e clientes;<br>
			            •	Artigo sobre a história da empresa parceira (sem data de produção específica) para ser postado no Blog Memória Santista;<br>
		            •	E, obviamente, a honra de compor um seleto grupo de empresas que têm um olhar carinhoso e diferenciado para a nossa história, a história de Santos e região.</p></td>
		          </tr>
			      <tr>
			        <td align="center"><img src="./Site do Instituto Histórico e Geográfico de Santos_files/contrapartida.jpg" width="800" height="806" alt=""></td>
		          </tr>
			      <tr>
			        <td align="center"><h4>Promessa é dívida!</h4>
			          <p>Em 6 de setembro de 2019, nós prometemos que todo o repositório digital produzido em nosso projeto estaria disponível para consulta a partir de 2020. Com muita garra e perserverança nós atingimos nossa meta.</p>
			          <p>Agora desejamos dar o sprint final, concluindo todo o processo (as 2 milhões de páginas) até o final de 2023.</p>
			          <p>Ficaremos muito felizes e gratos se você e sua empresa estiver neste time que se preocupa com a memória da cidade e sua evolução.</p>
			          <p>Seja uma abelha nessa colmeia produtiva. Seja, como todos nós...</p>
			          <h5>Forte abraço<br>
			            Sergio Willians<br>
		            jornalista, escritor, historiador e presidente do Instituto Histórico e Geográfico de Santos</h5></td>
		          </tr>
			      <tr>
			        <td align="center"><img src="./Site do Instituto Histórico e Geográfico de Santos_files/final.jpg" width="800" height="939" alt=""></td>
		          </tr>
			      <tr>
			        <td align="center">&nbsp;</td>
		          </tr>
		        </tbody>
		      </table>
			  <br>
			  <br>
            </div>
		</div>
	</div>
</body>
</html>