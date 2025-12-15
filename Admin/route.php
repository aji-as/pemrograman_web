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
    case 'add-dosen':
        require_once 'dosen/add-dosen.php';
        break;
    case 'detail-dosen':
        require_once 'dosen/detail-dosen.php';
        break;
    case 'edit-dosen':
        require_once 'dosen/edit-dosen.php';
        break;
    case 'hapus-dosen':
        require_once 'dosen/hapus-dosen.php';
        break;
    case 'pegawai':
        require_once 'pegawai/pegawai.php';
        break;
    case 'edit-pegawai':
        require_once 'pegawai/edit-pegawai.php';
        break;
    case 'hapus-pegawai':
        require_once 'pegawai/hapus-pegawai.php';
        break;
    case 'detail-pegawai':
        require_once 'pegawai/detail-pegawai.php';
        break;
    case 'detail-pegawai':
        require_once 'pegawai/detail-pegawai.php';
        break;
    case 'add-pegawai':
        require_once 'pegawai/add-pegawai.php';
        break;

    default:
        require_once 'dashboard.php';
    

}