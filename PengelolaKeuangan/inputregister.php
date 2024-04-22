<?php
include 'koneksi.php';

$username=$_POST['username'];
$password=$_POST['password'];
$namalengkap=$_POST['namalengkap'];

$query="INSERT INTO tb_user VALUES ('','$username','$password','$namalengkap')";
$hasil=mysqli_query($koneksi, "$query");

if($hasil)
{
    echo "proses input berhasil <a href='login.php'>Masuk sekarang</a>";
}
else
{
    echo "proses input gagal";  
}
?>