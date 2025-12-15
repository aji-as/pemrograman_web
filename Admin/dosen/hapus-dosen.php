<?php
$idx=$_GET['id'];
require_once "../config.php";

$sql="DELETE from dosen where id='$idx'";
$a=$koneksi->query($sql);

if($a){
    echo"Data Berhasil Dihapus";
    header("location: Admin/?p=dosen");
    exit;
}else{
    echo"Data Gagal Dihapus";
}
?>