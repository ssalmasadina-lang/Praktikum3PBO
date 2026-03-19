<?php

// data awal (simulasi)
$data = [
    ["1", "12345", "Budi", "Informatika"],
    ["2", "67890", "Ani", "Sistem Informasi"]
];

// ambil input dari form
$id_lama = $_POST['id_lama'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];

// proses update
foreach ($data as $key => $d) {
    if ($d[0] == $id_lama) {
        $data[$key] = [$id_lama, $nim, $nama, $jurusan];
    }
}

// tampilkan hasil
echo "<h2>Data setelah update:</h2>";

foreach ($data as $d) {
    echo $d[0] . " - " . $d[1] . " - " . $d[2] . " - " . $d[3] . "<br>";
}

echo "<br><a href='index.php'>Kembali ke Home</a>";

?>