<?php
error_reporting(E_ALL);
echo "guguselii <br/>";
$host="127.0.0.1";
$username="satree_user"; 
$password="Uk$12?HB7"; 
$db_name="Save_A_Tree"; 

$db = @new mysqli($host,$username,$password,$db_name);
if (mysqli_connect_errno()){
	die('Keine Verbindung; '.mysqli_connect_error().'('.mysqli_connect_errno().')');
}


echo "judihui";

?>