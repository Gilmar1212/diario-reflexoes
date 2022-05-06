
<?php include "php/selectReflexoes.php"?>
<div class="d-none"><?php include "php/deleteReflexao.php"?></div>
<!DOCTYPE html>
	<html lang="pt-br">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="css/index.css">
			<link rel="stylesheet" href="css/localDePostagem.css">
			<title>Reflexões | Página principal</title>
		</head>
		<body>
		<!--  <h1 style="color:white"><?php
    $dir = glob("php/sql-images/{*.jpg,*.png}",GLOB_BRACE);
var_dump($dir);
  foreach ($dir as $img) {
    if($dir >3){
      echo "<img src=".$dir[0].">"; 
    }
    break;  
    }
		
?></h1>  -->
			<div class="container">
				<div class="modal">
					<form action="php/CriaReflexoes.php" method="POST" enctype="multipart/form-data">
						<label for="titulo">
							<h4 id="titulo-label">Titulo: </h4>
						</label>
						<input type="text" id="titulo" name="titulo"required>
						<label for="titulo">
							<h4 id="titulo-label">Cód imagem: </h4>
						</label>
						<input type="text" class="cod-img" name="cod-img">
						<textarea id="areaTexto" name="areaTexto" required></textarea>
						<input name="imagem" type="file" id="imagem">
					<div class="container" id="container-list">
						<button type="reset">Limpar</button>
						<button  type="submit" id="btn-list" >lista</button>
						<input id="postar" type="submit"value="Postar">							
					</div>
					</form>
					
					<h3 >Lista:</h3>
			<ul class="list">
		
				<div id="load"class="fadeIn"><div id="filhoLoad"></div></div>
					

					<li name="list" id="listAdd">	
						
					<br>			
					</li>
				</ul>
				</div>	
			<div id="cabecalho">
				<fieldset>
						<legend >Menu</legend>			
							<img src="img/chakra.png" id="logo">
							<h1>Minhas Reflexões</h1>
					<ul id="menu">						
						<a href="#"><li>Outros</li></a>
						<a href="#"><li>Coleção</li></a>
						<a href="#conteudo-principal"><li>Reflexões</li></a>
					</ul>
						<button class="retorna-topo"><a href="#cabecalho" style="color:white;">&#5123;</a> </button>
						<a href="#conteudo-principal"id="editor"></a>
					
					</fieldset>
				</div>
				<div id="imagem-apresentacao">
					<section>
						<h1 >Reflexões</h1>
							<p class="reflexao">Nesta seção irei escrever todas as minhas reflexões que tenho diariamente antes de dormir ou em qualquer parte de meu dia, irá abranger diversos tipos de assuntos e reflexões.</p>
					</section>
				</div>
				<main id="conteudo-principal">
					<!-- <section id="sobre-a-vida"class="reflex">
					<h1 class="reflexao">Sobre a vida.</h1>	
					<p class="reflexao">
						O que falar sobre a vida, o que me foi experiênciado até agora, fruto do karma realizado no passado frutificando ainda agora, karma que desenvolvi agora frutificando agora, talvez alguma espécie de compaixão divina das ações do universo que fazem frutificar dores intensas agora para experiênciar todos os bons karmas desenvolvidos no futuro? a vida é simplesmente desse jeito sempre temos que nos manter alerta e diligentes em relação as situações que aparecem em nossa vida, nada possui segurança nada é controlavél, não podemos tomar a vida como se fosse algo que fosse de nosso controle pois o inesperado sempre pode acontecer, e dores podem surgir, não faço a minima idéia do que faço aqui não sei para onde vou não sei oque estou fazendo ou o que devo fazer, não sei se permaneço pensando em me relacionar com alguém, a unica coisa que desejo é estabelecer meu bem estar de forma concreta e duradoura.
					</p>
					<p class="reflexao">	
						A vida não passa de um rio, um rio cheio de pedras e redemoinhos, caso não se submeta a correnteza bate nas pedras se fere, entra no redemoinho permanece rodopiando no mesmo lugar afundando, porém aquele que se submete a correnteza entra e sai sem dificuldades, mesmo que ainda bata em algumas pedras e entre em alguns redemoinhos se ferindo não permanece preso a eles por muito tempo.
					</p>
					</section> -->
					<<!-- section id="sobre-oque-e-importante"class="reflex">
						<h1  class="reflexao">O que vale a pena nessa curta existência? reflexão sobre o caminho da verdade do mestre o Buddha</h1>
						<p class="reflexao">O que realmente causa alivio por muito tempo na nossa vida? o que experienciei
						até o presente momento é que a nossa mente cria situações argumentando que aquilo que se sucede deve ser feito por que vai trazer benefício para sí proprio, justifica que se executar-mos isso aquilo vai acontecer,geralmente o que acontece é o contrário, a mente começa a ficar cada vez pior e nunca para de pedir para fazer isso e continua se emaranhando num carretel de situações que geram ainda mais dor humilhação e sofrimento, na verdade a mente sente prazer em sentir desconforto justificando o próprio egoismo, o que deve ser feito geralmente está longe do que é proposto por nossos pensamentos e as vezes piora mais ainda a dor, o que realmente deveria ser feito seria apenas o fato de ponderar atitudes e conversas que jogue lenha na fogueira do ego, quanto mais se desabafa quando está iludido pelos sentimentos negativos mais ainda é sugado para baixo no redemoinho de lamentações, então o afastamento de situações dolorosas, o afastamento de coisas ou pessoas que lhe causam dor e desconforto geralmente é o ideal a se fazer, experiênciando o afastamento pode perceber que a mente começa a se sentir leve como um balão e aparece uma sensação de alivio como se realmente aquilo fosse o ideal, nem feliz nem triste apenas uma brisa agradavél na mente.<br> Vontade de sentir isso novamente.	
						</p>
					</section> -->
						<!-- <section id="sobre-necessidade-do-silencio"class="reflex">
							<h1 class="reflexao"> Reflexão sobre a necessidade do autocontrole.</h1>
							<p class="reflexao">
								Não caia na ilusão de palavras que irão te fazer decair, preste atenção no que você diz por que se for negatividade do jeito que sua mente está habituada a tristeza vai decair para lamentação novamente, não caia na armadilha da raiva cobiça tristeza e delusão, pois aqui não há nenhum tipo de recompensa nenhum tipo de satisfação nem algo que te leve a destruir a dor mas sim aumenta ainda mais a decepção, não se irrede com prazeres ilusórios, não há nenhum prazer aqui.
							</p>
						</section> -->
						<!-- <section id="sobre-lacos"class="reflex">
							<h1 class="reflexao">Sobre laços.</h1>
							<p class="reflexao">O que fazer quando não se sabe oque fazer? Não sei o que é certo e o que é errado, como devo agir diante de uma situação que não se tem total conhecimento ou o que realmente se passa, será que estou sendo bobo ou idiota? Ou será que é somente engano da minha cabeça? como saber se está sendo usado como valvula de escape do tédio de outra pessoa? Qual é a real situação? Se afastar ou não se afastar? perguntar ou somente deixar ir?
							o que realmente é real ou o que é ilusão mesmo de fato, como devo tirar esta prova não faço a minima idéia devemos ver se vale realmente manter uma relação de amizade onde um se doa e o outro dá migalhas, um está no claro e o outro no escuro, um some sem dar vestigios e aparece como se nada tivesse ocorrido e o outro permanece presente esperando igual um bobo desejando uma reciprocidade, uma resposta	ou somente uma despedida.	
							</p>
						</section> -->
						<!-- <section id="sobre-morte"class="reflex">
							<h1 class="reflexao">Sobre a morte e a vida e o sofrimento.</h1>
							<p class="reflexao">
							Por que é tão importante refletir sobre a brevidade da vida? A morte possui um papel tão importante em nossas vidas, sem ela não teriamos como acordar para esse fato, a morte é natural da vida este corpo não nos pertence ele se degrada aos poucos morre se dissolve e desaparece, o corpo não é tão belo como nossa mente faz a gente pensar que é, dentro e fora dele há tantas coisas nojentas, miolos figado, rim ,estomago,resto de comida no estomago, coração, intestinos, fezes nos intestinos, bexiga, urina na bexiga, gordura, pelos, cabelos, sebo, pele morta, sujeira, excreções, baço, sangue, suor, mal odor, gases, ossos, cartilagens, articulações, tendões, ligamentos, e tantos outros tipos de coisas repulsivas, mantendo em sí o estado de podridão e desgaste que aparece com o passar do tempo e que nós afastamos com embelezamento do corpo,limpeza constante, nos atraimos pelas formas, nos atraimos por pensamentos que criamos de outros, não pela realidade, desejo sexual queima e é sofrimento, sempre que surge aparece em seguida a ansiedade e impulso sempre vinculados um ao outro e em seguida aparece a segueira emocional confusão e apego, desejo é puro sofrimento disfarçado de prazer, obtemos o prazer mas logo não se sustenta, obtemos o prazer mas provavél que haverá frustação e busca por mais e mais, a morte faz parte da vida, devemos contempla-la com bastante atenção, desapegar daquilo que te impede de obter a auto satisfação, observar minuciosamente cada aspecto de apego que venha a ter de acordo com a nossa necessidade, não se apegar a pessoas nem a sentimentos, todos eles são sofrimento, surge em decorrência do desejo e logo em seguida apego.<br><br>

							Se quer realmente viver essa vida com tranquilidade e livre de dificuldades, então por mais que algumas presenças sejam agradavéis sempre há frustação que aparece em decorrencia de não aceitarmos a realidade de como as pessoas agem, nos apegamos a fumaça pois as pessoas são aquilo que são e se modificam constantemente nunca é possivél saber o que uma pessoa irá fazer como ela irá agir e reagir, algumas coisas são naturais e são criadas pela nossa corrupção, são apenas ideiais que criamos sobre as coisas, pessoas não devem agir da forma que você deseja, se há descordãncia de como a pessoa age, então há alguns caminhos a serem seguidos, o primeiro ou é o afastamento, ou é renunciar a sua forma de ver e aceitar o que é como é,nunca em hipotese alguma aja de acordo com o seu ódio pois ele é apenas resultado da sua confusão e ilusão de mundo, resultados do seu egoismo e não compreensão das coisas, agir com odio apenas gera mais sofrimento apenas, sofrimento e arrependimento queimação no peito no estomago na consciência,são todas corrupções da nossa mente, agir dessa forma vai além de te fazer mais infeliz, vai te prejudicar e prejudicar o próximo, lembre-se todos nós sofremos.<br><br>	

								<h4 class="reflexao">Se te incomoda deixa ir, assim como dizia o abençoado, quaisquer grilhões mundanos não se deixem aprisionar por eles.</h4>
							</p>
						
						</section> -->
					<?php 
							
							select();

						?>	
				</main>
			</div>
			<script src=javascript/lancaMenuTop.js></script>
			<script type="module"src="javascript/trataErrorCampo.js"></script>
			<script src="javascript/mostraModal.js"></script>
			 <script type="module" src="javascript/carregaListaTitulos.js"></script> 
		</body>
	</html>

