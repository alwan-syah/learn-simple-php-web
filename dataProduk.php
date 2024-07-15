<?php
// require itu untuk file yang penting, jika 
// ada yg salah diprogramnya, maka program ga jalan
require_once 'models/Produk.php';

// ciptakan objek dari class Produk
$object = new Produk();

// panggil method tampilkan data
$rs = $object->dataProduk();
?>
<h3>Data Produk</h3>
<a href="index.php?hal=formProduk" class="btn btn-primary">Tambah</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Kode</th>
            <th scope="col">Nama</th>
            <th scope="col">Harga</th>
            <th scope="col">Stok</th>
            <th scope="col">Kondisi</th>
            <th scope="col">Kategori</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($rs as $produk) {

        ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $produk['kode'] ?></td>
                <td><?= $produk['nama'] ?></td>
                <td><?= $produk['harga'] ?></td>
                <td><?= $produk['stok'] ?></td>
                <td><?= $produk['stok'] ?></td>
                <td><?= $produk['kategori'] ?></td>
            </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>