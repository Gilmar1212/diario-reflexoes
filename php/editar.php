<?php 
include"connect.php";
		echo "<input type=text name=texto>";
	$select = mysqli_query($connect,"SELECT *FROM tbl_reflexoes WHERE id") or die ("<br>problema na requisição");;

	while( $registro = mysqli_fetch_assoc($select)){
		$id = 	filter_input(INPUT_GET, 'id',FILTER_SANITIZE_NUMBER_INT);
			echo "<h5>ID:".$registro['id']." Titulo: ".$registro['titulo']."</h5>";
		echo " <a href='Index.php?id=".$registro['id']."'class='btn'> Editar</a>";
		
		if($id == $registro['id']){
		 mysqli_query($connect," UPDATE tbl_reflexoes SET areaTexto = $textArea, titulo = $titulo,	imagens=$cod_img  WHERE id = $id");
		}
		  if(move_uploaded_file($_FILES['imagem']['tmp_name'], "sql-images/".$_FILES['imagem']['name'])){
        rename("sql-images/".$_FILES['imagem']['name'], "sql-images/".$cod_img.".jpg");
        $addTabela= mysqli_query($connect,$query)or die ("erro na requisição");
    }
	}
?>