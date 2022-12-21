<?php
 header('Content-Type: application/json; charset=utf8');
 //panggil koneksi.php
 include("koneksi.php");

 //query tabel produk
 $sql="SELECT * FROM psb";
 $result=$kon->query($sql);

//data array
 $array=array();
 while($data=$result->fetch_assoc()) $array[]=$data; 
 
//mengubah data array menjadi json
 echo json_encode($array);
?>