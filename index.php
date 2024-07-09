<?php
// require itu untuk file yang penting, jika 
// ada yg salah diprogramnya, maka program ga jalan
require_once 'koneksi.php';

// include untuk file biasa
include_once 'kode_atas.php'; // un tuk css
include_once 'header.php';
include_once 'menu.php';
echo '<br/>';
include_once 'sidebar.php';
include_once 'main.php';
echo '<br/>';
include_once 'footer.php';
include_once 'kode_bawah.php'; //untuk javascript