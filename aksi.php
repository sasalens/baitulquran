<?php 
        include "koneksi.php";

        if(isset($_POST['submit'])){
            mysqli_query($kon,"INSERT INTO psb SET 
            nama ='$_POST[nama]',
            alamat ='$_POST[alamat]',
            ttl ='$_POST[ttl]',
            nohp ='$_POST[nohp]',
            motivasi ='$_POST[motivasi]'
            ");
            
            echo "
                <script>
                    document.location.href = 'berhasiltambah.php';
                </script>
            ";

            }
        ?>


