<?php

$conn = new mysqli("localhost","root","","modul_webpro");

$id = $_POST['id'];

$sql = "DELETE FROM Data_Mahasiswa WHERE id='$id'";

$conn->query($sql);

header("Location: index.php");

$conn->close();

?>
