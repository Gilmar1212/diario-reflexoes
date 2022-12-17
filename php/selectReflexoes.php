<?php
     function select(){
      include "connect.php";
      mysqli_set_charset($connect, "utf8");
      $query = mysqli_query($connect,"SELECT * FROM tbl_reflexoes")or die("<br>problema na requisição");
      while($registro = mysqli_fetch_assoc($query)):
  
        
?>
     
     <div class='p-relative'>
      <div class='p-absolute-pelicula'>
      </div>
          <img src=php/sql-images/<?=$registro["imagens"]?>.jpg>
      <div class='wrapper'>
      <div class='p-absolute'>
      <div class="d-flex justify-content-center">
         <h2 class='reflexao'><?=$registro["titulo"]?></h2>
        <p class='p-reflex reflexao'><?=$registro["areaTexto"]?></p>     
      </div>        
      </div>
      </div>
      </div>
     
  <?php
  endwhile;
}
   select();
  ?> 
    
 