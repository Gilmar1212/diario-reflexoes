<?php 
$host ="localhost";
$user ="root";
$pass ="";
$db = "reflexoes";
$connect = new mysqli($host,$user,$pass,$db);
mysqli_set_charset($connect, "utf8");
if($connect ->connect_errno){
    echo"falha ao conectar, erro numero :".mysqli_connect_errno();
}
?>
<?php 
/* PDO
define('MYSQL_HOST', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_DB_NAME', 'reflexoes');
$PDO = new PDO('mysql:host='.MYSQL_HOST.';dbname='.MYSQL_DB_NAME,MYSQL_USER,MYSQL_PASSWORD);
*/
?>