<?php
include("koneksi.php");
if(isset($_POST['simpan'])){
	$query_tambah_data="insert into formcuti(nik,nama,jabatan,hakcuti) values
	('".$_POST['nik']."',
	 '".$_POST['nama']."',
	 '".$_POST['jabatan']."',
	 '".$_POST['hakcuti']."')";
	 $proses_data=mysqli_query($rumah,$query_tambah_data);
	 if ($proses_data){
		 echo ' Tambah data berhasil<br/>';
	 } else {
		 echo mysqli_error();
	 }
}	 
?>
<form method="POST" action="">
<table border="1">
 <tr>
     <td>nik  </td>
     <td><input name="nik" type="number"></td>
 </tr>
  <tr>
     <td>nama</td>
     <td><input name="nama" type="text"></td>
 </tr>
  <tr>
     <td>jabatan</td>
     <td><input name="jabatan" type="text"></td>
 </tr>
 <tr>
     <td>hak cuti</td>
     <td><input name="hakcuti" type="text"></td>
 </tr>
 <tr>
     <td><input name="simpan" type="submit"></td>
 </tr>
 </table>
 </form>