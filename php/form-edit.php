
<?php 
include"connect.php";
	$select = mysqli_query($connect,"SELECT *FROM tbl_reflexoes ORDER BY id") or die ("<br>problema na requisição");
	while( $registro = mysqli_fetch_assoc($select)):
	

?>
	<div class="form-edit">
			<strong>ID: <?=$registro['id'];?></strong><br>
			<strong>Titulo: <?=$registro['titulo'];?></strong><br>	
			<strong>Conteudo: <?=$registro['areaTexto'];?></strong>
			<form action="php/editar.php?id=<?=$registro['id']?>" method="POST" enctype="multipart/form-data">
				<label for="titulo">
					<h4 id="titulo-label">Titulo: </h4>
				</label>
				<input type="text" id="titulo" name="titulo-update"required>
				<label for="titulo">
					<h4 id="titulo-label">Cód imagem: </h4>
				</label>
				<input type="text" id="cod-img-update" name="cod-img-update">
				<label for="titulo">
					<h4 id="titulo-label">Carregue a imagem aqui: </h4>
				</label>
				<input name="imagem" type="file" id="imagem">
				<textarea id="areaTexto" name="areaTexto-update" required></textarea>
				
				<div class="container" id="container-list">
					
					<input id="postar" class="btn text-center" type="submit" value="Postar">                         
				</div>
			</form>
			
		</div><br>
		
		<script type="module" src="javascript/carregaListaTitulos.js"></script> 
		<?php
	endwhile;
		?>
	
	

