<?php
session_start();
$inputs = $_SESSION['inputs'] ?? [];
$errors = $_SESSION['errors'] ?? [];
unset($_SESSION['errors']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borang Permohonan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <div class="logo-container">
            <img src="kpt.png" class="logo">
            <img src="poly.png" class="logo">
        </div>

        <h2 class="title">Borang Permohonan Skim Pinjaman Komputer Riba</h2>

        <?php if (!empty($errors)): ?>
            <div class="error">
                <?php foreach ($errors as $e): ?>
                    <p><?php echo $e; ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <form action="process.php" method="POST">

            <div class="form-group">
                <label class="label">Nama Pelajar</label>
                <input type="text" name="nama" class="input"
                    value="<?php echo htmlspecialchars($inputs['nama'] ?? ''); ?>">
            </div>

            <div class="form-group">
                <label class="label">No Matriks</label>
                <input type="text" name="matrik" class="input"
                    value="<?php echo htmlspecialchars($inputs['matrik'] ?? ''); ?>">
            </div>

            <div class="form-group">
                <label class="label">No Telefon</label>
                <input type="text" name="no_tel" class="input"
                    value="<?php echo htmlspecialchars($inputs['no_tel'] ?? ''); ?>">
            </div>

            <div class="form-group">
                <label class="label">Tarikh Mohon</label>
                <input type="date" name="tarikh" class="input"
                    value="<?php echo htmlspecialchars($inputs['tarikh'] ?? ''); ?>">
            </div>

            <div class="form-group">
                <label class="label">Program Pengajian</label>
                <select name="program" class="input">
                    <option value="">-- Pilih Program --</option>
                    <option <?php if (($inputs['program'] ?? '') == "Diploma Teknologi Maklumat") echo "selected"; ?>> Diploma Teknologi Maklumat</option>
                    <option <?php if (($inputs['program'] ?? '') == "Diploma Perakaunan") echo "selected"; ?>> Diploma Perakaunan</option>
                    <option <?php if (($inputs['program'] ?? '') == "Diploma Pengajian Perniagaan") echo "selected"; ?>> Diploma Pengajian Perniagaan</option>
                </select>
            </div>

            <div class="form-group">
                <label class="label">Jantina</label>
                <input type="radio" name="jantina" value="Lelaki" <?php if (($inputs['jantina'] ?? '') == "Lelaki")
                    echo "checked"; ?>> Lelaki

                <input type="radio" name="jantina" value="Perempuan" <?php if (($inputs['jantina'] ?? '') == "Perempuan")
                    echo "checked"; ?>> Perempuan
            </div>

            <div class="form-group">
                <label class="label">Alasan Sokongan (Min 25 aksara)</label>
                <textarea name="alasan"
                    class="textarea"><?php echo htmlspecialchars($inputs['alasan'] ?? ''); ?></textarea>
            </div>

            <div class="form-group">
                <label class="checkbox-container">
                    Saya mengesahkan maklumat adalah benar
                    <input type="checkbox" name="pengesahan" value="setuju" <?php if (isset($inputs['pengesahan']))
                        echo "checked"; ?>>
                    <span class="checkmark"></span>
                </label>
            </div>

            <button type="submit" class="btn-submit">Hantar</button>
            <button type="reset" class="btn-reset">Tetap Semula</button>

        </form>

    </div>

</body>

</html>