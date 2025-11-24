<?php

$koneksi = new mysqli("localhost","root", "","db_siakad");

if (!$koneksi){
    echo "coneksi gagal";
} 



// if (isset($_POST['simpan'])) {
//     // Ambil data dari form dan amankan
//     $nama = $koneksi->real_escape_string($_POST['nama']);
//     $nim = $_POST['nim'];  // asumsikan nim angka
//     $jk = $koneksi->real_escape_string($_POST['jk']);
//     $alamat = $koneksi->real_escape_string($_POST['alamat']);
//     $prodi =  $_POST['prodi'];  // asumsikan prodi id angka
//     $waktu = date("Y-m-d H:i:s");

//     // Tuliskan kolom yang akan diisi supaya aman dan jelas
//     $sql = "insert into mhs  value ( NULL, $nim, '$nama', '$jk', '$alamat', $prodi, '$waktu')";

//     $b = $koneksi->query($sql);

//     if ($b) {
//         echo "Data berhasil disimpan!";
//     } else {
//         echo "Error: " . $koneksi->error;
//     }
// }