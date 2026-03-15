<!DOCTYPE html>
<html>
<head>
<title>Keputusan Permohonan</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2 class="title">Keputusan Permohonan</h2>

<?php

$nama = $_POST['nama'];
$matrik = $_POST['matrik'];
$umur = $_POST['umur'];
$program = $_POST['program'];
$status = $_POST['status'];
$alasan = $_POST['alasan'];

if(empty($nama) || empty($matrik) || empty($umur) || empty($program) || empty($status) || empty($alasan))
{
    echo "<p class='error'>Ralat: Semua maklumat mesti diisi.</p>";
}

else if(strlen($alasan) < 25)
{
    echo "<p class='error'>Ralat: Alasan mesti sekurang-kurangnya 25 aksara.</p>";
}

else
{
    echo "<p class='success'>Permohonan berjaya dihantar.</p>";

    echo "<p>Nama: $nama</p>";
    echo "<p>No Matriks: $matrik</p>";
    echo "<p>Umur: $umur</p>";
    echo "<p>Program: $program</p>";
    echo "<p>Status: $status</p>";
    echo "<p>Alasan: $alasan</p>";
}

?>

<br>
<a href="index.php" class="link">Kembali ke Borang</a>

</div>

</body>
</html>