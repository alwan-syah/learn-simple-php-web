<?php
require_once '../koneksi.php';
require_once '../models/Produk.php';

// 1. tangkap request element form
// yang wajib sama adalah yg di dalem form ini
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$kondisi = $_POST['kondisi'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$idjenis = $_POST['jenis'];
$foto = $_POST['foto'];

// 2. menyimpan data-data diatas dalam sebuah array
$data = [
    $kode, // untuk tanda tanya (?) ke 1
    $nama, // untuk tanda tanya (?) ke 2
    $kondisi, // untuk tanda tanya (?) ke 3
    $harga, // untuk tanda tanya (?) ke 4
    $stok, // untuk tanda tanya (?) ke 5
    $idjenis, // untuk tanda tanya (?) ke 6
    $foto // untuk tanda tanya (?) ke 7
];

// 3. proses 
$obj = new Produk();
$obj->simpan($data); // memanggil fungsi simpan, menyimpan data array

// 4. landing page
// agar data tampil ke halaman produk 
header('Location:http://tes.test/Appku/index.php?hal=dataProduk'); //menggunakan fungsi header dengan domain ke halaman produk