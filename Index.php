<div class="d-none"><?php include "php/deleteReflexao.php";?></div>
<?php 
$spliter = explode("/",$_SERVER['SERVER_NAME']);
$spliter2 = explode("/",$_SERVER['REQUEST_URI']);
$url =$spliter[0]."/".$spliter2[1];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<title>Reflexões | Página principal</title>
</head>
<body>
	<div class="container">
		
		<div class="modal">
			<div class="wrapper">
			
		
			<form action="php/CriaReflexoes.php" method="POST" enctype="multipart/form-data">
				<div class="grid grid-col-2 container">
					<div class="display-flex align-items-center">
						<label for="titulo">
							<h4 id="titulo-label"> Titulo: </h4>
						</label>
						<input type="text" id="titulo" name="titulo"required>
					</div>
					<div class="display-flex align-items-center">
						<label for="titulo">
							<h4 id="titulo-label">Cód imagem: </h4>
						</label>
						<input type="text" id="cod-img" name="cod-img">
					</div>
				</div>
				<textarea id="areaTexto" name="areaTexto" required></textarea>
				<div class="display-flex evenly m-2 flex-direction-row">
				<div class="display-flex flex-column">
					<label for="titulo">
						<h4 id="titulo-label">Carregue a imagem aqui: </h4>
					</label><br>
						<input name="imagem" type="file" id="imagem">
				</div>
					<div>
						<button class="btn" type="reset">Limpar</button>
							<button class="btn" id="btn-list-delete" >Deletar</button>
							<a class="btn" id="btn-list-edit" >Editar</a>
					</div>					
				</div>
				<div class="display-flex justify-content-center"><input id="postar" class="btn text-center" type="submit"value="Postar"></div>
			</form><br>
			<h3 >Lista:</h3>
			<div id="load"><div id="filhoLoad"></div></div>
			<ul class="list">
				<li name="list" id="listAdd">   
					<br>            

				</li>
			</ul>
			</div>
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
				<h2>Reflexões</h2>
				<p class="reflexao">Nesta seção irei escrever todas as minhas reflexões que tenho diariamente antes de dormir ou em qualquer parte de meu dia, irá abranger diversos tipos de assuntos e reflexões.</p>
			</section>
		</div>
		<main id="conteudo-principal">
			<script type="module">
				import result from './javascript/carregaListaTitulos.js';
				result();
			</script> 
		</main>
	</div>
	<script src=javascript/lancaMenuTop.js></script>
	<script type="module"src="javascript/trataErrorCampo.js"></script>
	<script src="javascript/mostraModal.js"></script>
	<!-- <script type="module" src="javascript/carregaListaTitulos.js"></script>  -->
	<script type="module" src="javascript/carrega-edicao.js"></script> 
	<script type="module" src="javascript/listar-delete.js"></script> 
</body>
</html>

