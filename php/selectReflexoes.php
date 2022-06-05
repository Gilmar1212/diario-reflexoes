<?php
     function select(){
      include "php/connect.php";
      $query = mysqli_query($connect,"SELECT * FROM tbl_reflexoes ORDER BY id")or die("<br>problema na requisição");
      while($registro = mysqli_fetch_assoc($query)){
    $dir = glob("php/sql-images/".$registro["imagens"]."{*.jpg,*.png}",GLOB_BRACE);
  foreach ($dir as $img) {
    if($dir >1){
      echo "<div class='p-relative'>";
      echo "<div class='p-absolute-pelicula'>";
      echo "</div>" ;
          echo "<img src=".$dir[0].">";
      echo "<div class='wrapper'>";
      echo "<div class='p-absolute'>";     
      echo "<h2 class='reflexao'>".$registro["titulo"]."</h2>";
        echo "<p class='p-reflex reflexao'>".$registro["areaTexto"]."</p>";             
      echo "</div>" ;
      echo "</div>" ;
      echo "</div>" ;
    }
    break;  
    }    

    }
  }
   
    select();
    
 