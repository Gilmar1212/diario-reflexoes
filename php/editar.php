
<?php 
include"connect.php";
	
		 $titulo = $_POST['titulo-update'];
		 $cod_img_update =$_POST["cod-img-update"];
		 define("COD_IMG_UPDATE",$cod_img_update);
		 $textArea = $_POST['areaTexto-update'];
		 $id = 	filter_input(INPUT_GET, 'id',FILTER_SANITIZE_NUMBER_INT);
		if(isset($titulo) && isset($cod_img_update)&& isset($textArea)){
			 echo "<script>
            alert('Atualização realizada com sucesso');
            setInterval(function(){
                window.location.href = '../Index.php';
            }, 100);
    </script>";
	$select = mysqli_query($connect,"SELECT *FROM tbl_reflexoes ORDER BY id") or die ("<br>problema na requisição");
	if($id){
	
		 if(move_uploaded_file($_FILES['imagem']['tmp_name'], "sql-images/".$_FILES['imagem']['name'])){
      

        rename("sql-images/".$_FILES['imagem']['name'], "sql-images/".COD_IMG_UPDATE.".jpg");	

    }
			
		}
		
		 mysqli_query($connect," UPDATE tbl_reflexoes SET titulo ='$titulo', areaTexto = '$textArea', imagens = '$cod_img_update' WHERE id=$id");
		}else{
			 echo "<script>
            alert('Atualização fracassou');
            setInterval(function(){
                window.location.href = '../Index.php';
            }, 100);
    </script>";
		}

?>