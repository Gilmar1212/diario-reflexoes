<?php
	class Delete{
		public function deletaPostagem(){			
			include "connect.php";	
		$query = mysqli_query($connect,"SELECT *FROM tbl_reflexoes WHERE id") or die ("<br>problema na requisição");
		
	while($registro = mysqli_fetch_assoc($query)){
		$id = 	filter_input(INPUT_GET, 'id',FILTER_SANITIZE_NUMBER_INT);
		echo '	<li name="list" id="listAdd" class="list-delete">   ';
		echo "<h5>ID:".$registro['id']." Titulo: ".$registro['titulo']."</h5>";
		echo " <a href='Index.php?id=".$registro['id']."'class='btn-delete btn display-flex justify-content-center align-items-center'> Apagar</a>";
		echo '</li>';
		
		if($id == $registro['id']){
			mysqli_query($connect,"DELETE FROM tbl_reflexoes WHERE id=".$id."");
			unlink("sql-images".$registro['imagens'].".jpg");
		}
		
	}
	}

	}

	$delete = new Delete();
	$delete->deletaPostagem();
?>