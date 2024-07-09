<?php 

class Produk{
    // member 1 yaitu variabel
    private $koneksi;

    // member 2 adalah konstruktor
    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    // member 3 itu method CRUD
    public function dataProduk(){
        $sql = "SELECT produk.*, jenis.nama AS kategori FROM produk
        INNER JOIN jenis ON jenis.id = produk.idJenis";

        // prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}