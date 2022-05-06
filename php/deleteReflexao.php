<?php
	class Delete{
		public function deleta(){			
			include "connect.php";	
		$query = mysqli_query($connect,"SELECT *FROM tbl_reflexoes WHERE id") or die ("<br>problema na requisição");
	while($registro = mysqli_fetch_assoc($query)){
		$id = 	filter_input(INPUT_GET, 'id',FILTER_SANITIZE_NUMBER_INT);
		 echo "ID:".$registro['id']." Titulo: ".$registro['titulo'];
		echo "<a href='Index.php?id=".$registro['id']."'> Apagar</a><br>";
		if($id == $registro['id']){
			mysqli_query($connect,"DELETE FROM tbl_reflexoes WHERE id=".$id."");
		}
		if($registro['id']==null){
	echo "<script>
            alert('Postagem deletada');
            setInterval(function(){
                window.location.href = '../Index.php';
            }, 100);
    </script>";
		}
	}
	}
		}

	$delete = new Delete();
	$delete->deleta();
?>