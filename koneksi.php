<?php

$dsn = 'mysql:dbname=dbbarang;host=localhost';
$user = 'root';
$password = '';


try {
    $dbh = new PDO($dsn, $user, $password); // PDO Driver DSN. Throws A PDOException.
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, TRUE);
    // echo 'Alhamdullilah Sukses';
} catch (PDOException $Exception) {
    // PHP Fatal Error. Second Argument Has To Be An Integer, But PDOException::getCode Returns A
    // String.
    echo 'Gagal Koneksi DB karena ' . $Exception->getMessage();
}
