<table border="1" > 
  <tr> 
   <td>Nik</td>
   <td>Nama</td>
   <td>Jabatan</td>
   <td>Hak Cuti</td>
  </tr> 
  <?php 
$user= "root" ;
$server= "localhost";
$password=  "";
$database= "db_ptnuba" ;

$rumah= mysqli_connect($server,$user,$password);
      $db= mysqli_select_db($rumah,$database);
    
      $tampil="select * from formcuti"; 
      $query_tampil=mysqli_query($rumah,$tampil); 
      while ($dataTampil=mysqli_fetch_array($query_tampil)) {
     
     ?> 
  
   <tr> 
    
    <td><?php echo $dataTampil['nik']; ?></td> 
    <td><?php echo $dataTampil['nama']; ?></td>
    <td><?php echo $dataTampil['jabatan']; ?></td> 
    <td><?php echo $dataTampil['hakcuti']; ?></td> 
  </tr> 
    <?php } ?> 
</table>