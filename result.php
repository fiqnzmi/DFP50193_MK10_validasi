<?php
session_start();

$data = $_SESSION['success_data'] ?? null;

if (!$data) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keputusan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <div class="logo-container">
            <img src="kpt.png" class="logo">
            <img src="poly.png" class="logo">
        </div>

        <h2 class="title">Keputusan Permohonan</h2>

        <div class="results">

            <div class="result-item">
                <span class="result-label">Nama</span>
                <span class="result-value"><?php echo $_SESSION['nama']; ?></span>
            </div>

            <div class="result-item">
                <span class="result-label">No Matriks</span>
                <span class="result-value"><?php echo $_SESSION['matrik']; ?></span>
            </div>

            <div class="result-item">
                <span class="result-label">No Telefon</span>
                <span class="result-value"><?php echo $data['no_tel']; ?></span>
            </div>

            <div class="result-item">
                <span class="result-label">Tarikh Mohon</span>
                <span class="result-value"><?php echo date("d/m/Y", strtotime($_SESSION['tarikh'])); ?></span>
            </div>

            <div class="result-item">
                <span class="result-label">Program</span>
                <span class="result-value"><?php echo $_SESSION['program']; ?></span>
            </div>

            <div class="result-item">
                <span class="result-label">Jantina</span>
                <span class="result-value"><?php echo $_SESSION['jantina']; ?></span>
            </div>

            <div class="result-item">
                <span class="result-label">Alasan</span>
                <span class="result-value"><?php echo $_SESSION['alasan']; ?></span>
            </div>

        </div>

        <a href="index.php" class="link">Kembali ke Borang</a>

    </div>

</body>

</html>