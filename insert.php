<?php

$conn = new mysqli("localhost","root","","modul_webpro");

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];

$sql = "INSERT INTO Data_Mahasiswa (nim,nama,jurusan)
VALUES ('$nim','$nama','$jurusan')";

$conn->query($sql);

header("Location: index.php");

$conn->close();

?>