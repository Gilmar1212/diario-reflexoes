<?php 
$host ="localhost";
$user ="root";
$pass ="";
$db = "testando_crud";

$connect = new mysqli($host,$user,$pass,$db);
if($connect ->connect_errno){
    echo"falha ao conectar, erro numero :".mysqli_connect_errno();
}else{
	echo "sucess";
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