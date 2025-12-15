<?php
$idx=$_GET['id'];
require_once "../config.php";

$sql="DELETE from pegawai where id='$idx'";
$a=$koneksi->query($sql);

if($a){
    echo"Data Berhasil Dihapus";
    header("location: Admin/?p=pegawai");
    exit;
}else{
    echo"Data Gagal Dihapus";
}
?>