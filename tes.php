<?php
$sumber = 'http://localhost/baitulquran/json.php';
$konten = file_get_contents($sumber);
$data = json_decode($konten, true);

?>

<!DOCTYPE html>
<html>
<head>
 <title>Menampilkan data json</title>
 <style>
  table {
   width: 100%; 
  }
  table tr td {
   padding: 1rem;
  }
 </style>
</head>
<body>
 <table border="1">
  <tr>
   <th>ID</th>
   <th>Nama</th>
   <th>Alamat</th>
   <th>Tanggal Lahir</th>
   <th>Nomor Hp</th>
   <th>Motivasi</th>
  </tr>
  <?php   
   for($a=0; $a < count($data); $a++)
   {
    print "<tr>";
    // penomeran otomatis
    // print "<td>".$a."</td>";
    // menayangkan 
    print "<td>".$data[$a]['id']."</td>";
    print "<td>".$data[$a]['nama']."</td>";
    print "<td>".$data[$a]['alamat']."</td>";
    print "<td>".$data[$a]['ttl']."</td>";
    print "<td>".$data[$a]['nohp']."</td>";
    print "<td>".$data[$a]['motivasi']."</td>";
    print "</tr>";
   }
  ?>
 </table>
</body>
</html>