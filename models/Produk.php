<?php

class Produk
{
    // member 1 yaitu variabel
    private $koneksi;

    // member 2 adalah konstruktor
    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    // member 3 itu method CRUD
    public function dataProduk()
    {
        $sql = "SELECT produk.*, jenis.nama AS kategori FROM produk
        INNER JOIN jenis ON jenis.id = produk.idJenis ORDER BY produk.id DESC";

        // prepare statement PDO
        $ps = $this->koneksi->prepare($sql);

        // untuk mengeksekusi query
        $ps->execute();

        // untuk mengambil hasil dari eksekusi data
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function dataJenis()
    {
        $sql = "SELECT  * FROM jenis";
        // fungsi query untuk mengeksekusi query dan ambil datanya
        $rs = $this->koneksi->query($sql);
        return $rs;
    }

    public function simpan($data)
    {
        $sql = "INSERT INTO produk(kode,nama,kondisi,harga,stok,idJenis,foto)
        VALUES (?,?,?,?,?,?,?)";

        // prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}
