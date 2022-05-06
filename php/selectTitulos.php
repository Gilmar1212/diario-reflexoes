     <?php
    

              include "connect.php";
              
              $query = mysqli_query($connect,"SELECT * FROM tbl_reflexoes ORDER BY id " )or die ("<br>problema na resquisião");
            
              
                while($registro = mysqli_fetch_assoc($query)){
                 
               
             	 $registro['titulo'];
            
                 
                  // $str ="<h3> "."<input type='checkbox'id='checkbox' name=checkbox>".$registro["id"]." :"
                  // .$registro['titulo']."</input>"."</h3>"."<br>";
                  $str = $registro["titulo"]."<br>";
                  echo $str;
                 
                }
              
              
       
    ?>