<?php
session_start();

$_SESSION['inputs'] = $_POST;

$nama = trim($_POST['nama'] ?? '');
$matrik = trim($_POST['matrik'] ?? '');
$no_tel = trim($_POST['no_tel'] ?? '');
$tarikh = trim($_POST['tarikh'] ?? '');
$program = trim($_POST['program'] ?? '');
$jantina = trim($_POST['jantina'] ?? '');
$alasan = trim($_POST['alasan'] ?? '');
$pengesahan = $_POST['pengesahan'] ?? '';

unset($_SESSION['errors']);
unset($_SESSION['success_data']);

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    $_SESSION['errors'] = ["Sila hantar borang dahulu"];

} elseif ($nama == '') {
    $_SESSION['errors'] = ["Sila masukkan Nama"];

} elseif ($matrik == '') {
    $_SESSION['errors'] = ["Sila masukkan No Matriks"];

} elseif ($no_tel == '') {
    $_SESSION['errors'] = ["Sila masukkan No Telefon"];

} elseif (!preg_match('/^[0-9]{10,11}$/', $no_tel)) {
    $_SESSION['errors'] = ["No Telefon mesti 10 atau 11 digit"];

} elseif ($tarikh == '') {
    $_SESSION['errors'] = ["Sila masukkan Tarikh"];

} elseif ($program == '') {
    $_SESSION['errors'] = ["Sila pilih Program"];

} elseif ($jantina == '') {
    $_SESSION['errors'] = ["Sila pilih Jantina"];

} elseif ($alasan == '') {
    $_SESSION['errors'] = ["Sila masukkan Alasan"];

} elseif (strlen($alasan) < 25) {
    $_SESSION['errors'] = ["Alasan mesti sekurang-kurangnya 25 aksara"];

} elseif (empty($pengesahan)) {
    $_SESSION['errors'] = ["Sila tandakan pengesahan"];

} else {
    $_SESSION['success_data'] = [
        'nama' => htmlspecialchars($nama),
        'matrik' => htmlspecialchars($matrik),
        'no_tel' => htmlspecialchars($no_tel),
        'tarikh' => htmlspecialchars($tarikh),
        'program' => htmlspecialchars($program),
        'jantina' => htmlspecialchars($jantina),
        'alasan' => htmlspecialchars($alasan)
    ];

    header("Location: result.php");
    exit();
}

header("Location: index.php");
exit();