<?php

$p = $_GET['p'];

switch ($p) {
    case 'dosen':
        require_once 'dosen/dosen.php';
        break;
    case 'mahasiswa':
        require_once 'mhs/mahasiswa.php';
        break;
     case 'ganti_pass':
        require_once 'ganti_pas.php';
        break;
    case 'add-mhs':
        require_once 'mhs/add-mahasiswa.php';
        break;
    case 'detail-mhs':
        require_once 'mhs/detail-mhs.php';
        break;
    case 'edit-mhs':
        require_once 'mhs/edit-mhs.php';
        break;
    case 'hapus-mhs':
        require_once 'mhs/hapus-mhs.php';
        break;
    case 'detail-dosen':
        require_once 'dosen/detail-dosen.php';
        break; 
    default:
        require_once 'dosen/dosen.php';
    

}