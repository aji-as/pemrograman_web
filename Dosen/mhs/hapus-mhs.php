<?php
$idx=$_GET['id'];
require_once "../config.php";

$sql="DELETE from mhs where id='$idx'";
$a=$koneksi->query($sql);

if($a){
    echo"Data Berhasil Dihapus";
}else{
    echo"Data Gagal Dihapus";
}
?>