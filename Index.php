<div class="d-none"><?php include "php/selectReflexoes.php"?></div>
<div class="d-none"><?php include "php/deleteReflexao.php"?></div>
<?php include "php/editar.php"?>

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
					<button id="btn-list" >lista</button>
					<button id="edit" >Editar</button>
					<input id="postar" type="submit"value="Postar">                         
				</div>
			</form>
			<h3 >Lista:</h3>
			<div id="load"><div id="filhoLoad"></div></div>
			<ul class="list">
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
			<?php select();?>   
		</main>
	</div>
	<script src=javascript/lancaMenuTop.js></script>
	<script type="module"src="javascript/trataErrorCampo.js"></script>
	<script src="javascript/mostraModal.js"></script>
	<script type="module" src="javascript/carregaListaTitulos.js"></script> 
</body>
</html>

