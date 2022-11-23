<?php 
include "koneksi.php";

if(isset($_GET['id'])){
    mysqli_query($kon,"DELETE FROM psb WHERE id='$_GET[id]'");
    
    echo "
        <script>
			alert('Data berhasil dihapus!');
			document.location.href = 'datasantri.php';
		</script>
    ";

    }
?>