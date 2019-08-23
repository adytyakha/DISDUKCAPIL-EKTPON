<?php
$dsn ='oci:dbname=adytya';
$user ='system';
$pass = 'adytya';
$conn = new PDO($dsn, $user, $pass);

if($conn){
echo "Koneksi berhasil";
}else{
$err=oci_error();
echo "Gagal tersambung ke ORACLE". $err['text'];
}
?>