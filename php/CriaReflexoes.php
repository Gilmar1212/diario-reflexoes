<?php
 function validaPostagem(){
    echo "<script>
            alert('Postagem enviada com sucesso');
            setInterval(function(){
                window.location.href = '../Index.php';
            }, 100);
    </script>";
 }

 function insereImagem(){
     
    $path_dir = "C:\wamp64\www\\$spliter[1]\\php\sql-images";
    echo $path_dir;
    if(file_exists('sql-images')){
    }else{
        mkdir($path_dir);
    }  
 }

 function criarPostagem(){
 $titulo = $_POST['titulo'];
$cod_img =$_POST["cod-img"];
 define("COD_IMG",$cod_img);
$textArea = $_POST['areaTexto'];
 include_once("connect.php");
  $query = "INSERT INTO tbl_reflexoes(`titulo`,`imagens`,`areaTexto`)VALUES('".$titulo."','".$cod_img."','".$textArea."')";
   if(is_null($titulo) || $titulo =" " &&  is_null($cod_img)|| $cod_img=" " && is_null($textArea)|| $textArea == " "){
        echo "<script>
            alert('Postagem falhou');
            setInterval(function(){
                window.location.href = '../Index.php';
            }, 100);
    </script>";
           }
           else{
            $select = mysqli_query($connect,"SELECT *FROM tbl_reflexoes");
    insereImagem();  
    if(move_uploaded_file($_FILES['imagem']['tmp_name'], "sql-images/".$_FILES['imagem']['name'])){
      

        rename("sql-images/".$_FILES['imagem']['name'], "sql-images/".COD_IMG.".jpg");
        mysqli_query($connect,$query)or die ("erro na requisição");
    }
       validaPostagem();
      
    } 
    }



criarPostagem();
?>
