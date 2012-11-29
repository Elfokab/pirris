<?
$my_db="test";
$my_pss="negro";
$my_usr="root";
$my_server="localhost";
$conn=mysql_connect($my_server,$my_usr,$my_pss);
mysql_select_db($my_db, $conn);
?>
