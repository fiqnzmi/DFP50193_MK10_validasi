<?php
session_start();
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

        <h2 class="title">Keputusan Permohonan</h2>

        <?php
        if (isset($_SESSION['error'])) {
            echo "<p class='error'>" . $_SESSION['error'] . "</p>";
            echo "<a href='index.php' class='link'>Kembali</a>";
            session_destroy();
            exit();
        }
        ?>

        <p><b>Nama:</b> <?php echo $_SESSION['nama']; ?></p>
        <p><b>No Matriks:</b> <?php echo $_SESSION['matrik']; ?></p>
        <p><b>Umur:</b> <?php echo $_SESSION['umur']; ?></p>
        <p><b>Program:</b> <?php echo $_SESSION['program']; ?></p>
        <p><b>Jantina:</b> <?php echo $_SESSION['jantina']; ?></p>
        <p><b>Alasan:</b> <?php echo $_SESSION['alasan']; ?></p>

        <a href="index.php" class="link">Kembali ke Borang</a>

    </div>

</body>

</html>