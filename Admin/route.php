<?php

$p = $_GET['p'];

switch ($p) {
    case 'dosen':
        require_once 'dosen.php';
        break;
    case 'mahasiswa':
        require_once 'mahasiswa.php';
        break;
    case 'pegawai':
        require_once 'pegawai.php';
        break;
     case 'ganti_pass':
        require_once 'ganti_pas.php';
        break;
    case 'add-mhs':
        require_once 'add-mahasiswa.php';
        break;
    case 'detail-mhs':
        require_once 'detail-mhs.php';
        break;
    case 'edit-mhs':
        require_once 'edit-mhs.php';
        break;
    case 'hapus-mhs':
        require_once 'hapus-mhs.php';
        break;
    default:
        require_once 'dashboard.php';
    

}