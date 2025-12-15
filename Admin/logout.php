<?php 
session_start();        // Mulai session

session_unset();        // Hapus semua data session
session_destroy();      // Hancurkan session

header("Location: login.php"); // Arahkan ke halaman login
exit;
