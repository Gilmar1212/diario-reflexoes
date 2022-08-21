<?php
include_once("connect.php");
$query = mysqli_query($connect,"SELECT * FROM tbl_reflexoes");
while($registro = mysqli_fetch_assoc($query)):
?>
	<h2>ID: <?=$registro['id'];?></h2><br>
	<h2>Titulo: <?=$registro['titulo'];?></h2><br>	
	<h2>Conteudo: <?=$registro['areaTexto'];?></h2>
<?php
endwhile;
?>