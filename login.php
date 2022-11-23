<?php 
 
include 'koneksi.php';
 
if (isset($_POST['submit'])) {
 
    $sql = mysqli_query($kon, "SELECT * FROM admin WHERE user='$_POST[user]' AND pasword='$_POST[pasword]'");

    $row = mysqli_num_rows($sql);
    if ($row > 0) {
        $_SESSION['user'] = $row['user'];
        header("Location: datasantri.php");
    } else {
        echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>LOGIN</title>
</head>
<body>
 
    <div class="container">
        <form action="" method="POST">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <label for="user">Username :</label>
                <input type="text" placeholder="Username" name="user">
            </div><br>
            <div class="input-group">
                <label for="pasword">Password :</label>
                <input type="password" placeholder="Password" name="pasword">
            </div><br>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
        </form>
    </div>
</body>
</html>

