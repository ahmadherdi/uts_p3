<?php
$user= "root" ;
$server= "localhost";
$password=  "";
$database= "db_ptnuba" ;

$rumah= mysqli_connect($server,$user,$password);
if ($rumah){
   echo 'Berhasil Terhubung<br/>'; 
}else{
   echo'cek lagi';
   }
$db= mysqli_select_db($rumah,$database);
if ($db){
echo ' db berhasil terhubung<br/>';
}else {
 echo 'cek lagi !!';
 }
?>