<?php 
include_once("connect.php");
$textArea = $_POST['areaTexto'];
$titulo = $_POST['titulo'];
$cod_img =$_POST["cod-img"]; 

 $query ="INSERT INTO tbl_reflexoes(`titulo`,`imagens`,`areaTexto`)VALUES('".$titulo."','".$cod_img."','".$textArea."')";
 

 if($query==true){
    $path_dir = "C:\wamp64\www\projects\projeto-diario-de-reflexoes\php\sql-images";
    if(file_exists('upload')){
    }else{
        mkdir($path_dir);
    }
    
    if(move_uploaded_file($_FILES['imagem']['tmp_name'], "php/sql-images/".$_FILES['imagem']['name'])){
        rename("php/sql-images/".$_FILES['imagem']['name'], "php/sql-images/".$cod_img.".jpg");
        $addTabela= mysqli_query($connect,$query)or die ("erro na requisição");
    }
    // echo "<script>
    
    //         alert('Postagem enviada com sucesso');

    //         setInterval(function(){
    //             window.location.href = '../Index.php';
    //         }, 100);

        
        
    // </script>";
} 
// $arquivo = fopen("vetKeyImagens.php","w");
// $tagDeCima = "<?php"."\n";
// fwrite($arquivo,$tagDeCima);

//  $array='$vetImagens = array();'."\n";
//  fwrite($arquivo,$array);
//  $array = '$vetImagens['.random(0,100).']= array()'."\n";
//  fwrite($arquivo,$array);
    
/*$tagDeBaixo ="?>"."\n";
fwrite($arquivo,$tagDeBaixo);

fclose($arquivo);*/
?>
