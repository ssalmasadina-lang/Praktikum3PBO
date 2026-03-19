<?php

$conn = new mysqli("localhost","root","","modul_webpro");

$sql = "SELECT * FROM Data_Mahasiswa";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {

        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["nim"]."</td>";
        echo "<td>".$row["nama"]."</td>";
        echo "<td>".$row["jurusan"]."</td>";
        echo "</tr>";

    }

}

$conn->close();

?>