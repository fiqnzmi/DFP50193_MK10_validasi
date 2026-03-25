<?php
session_start();

$nama = $_POST['nama'];
$matrik = $_POST['matrik'];
$umur = $_POST['umur'];
$program = $_POST['program'];
$jantina = $_POST['jantina'];
$alasan = $_POST['alasan'];
$pengesahan = $_POST['pengesahan'];

$error = "";

if (empty($nama)) {
    $error = "Nama pelajar belum diisi";
} elseif (empty($matrik)) {
    $error = "No matriks belum diisi";
} elseif (empty($umur)) {
    $error = "Umur belum diisi";
} elseif (empty($program)) {
    $error = "Sila pilih program pengajian";
} elseif (empty($jantina)) {
    $error = "Sila pilih jantina";
} elseif (empty($alasan)) {
    $error = "Alasan sokongan belum diisi";
} elseif (strlen($alasan) < 25) {
    $error = "Alasan mesti sekurang-kurangnya 25 aksara";
} elseif (empty($pengesahan)) {
    $error = "Sila tandakan pengesahan";
}

if ($error != "") {
    $_SESSION['error'] = $error;
    header("Location: result.php");
    exit();
}

$_SESSION['nama'] = $nama;
$_SESSION['matrik'] = $matrik;
$_SESSION['umur'] = $umur;
$_SESSION['program'] = $program;
$_SESSION['jantina'] = $jantina;
$_SESSION['alasan'] = $alasan;

header("Location: result.php");
exit();
?>