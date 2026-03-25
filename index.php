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

        <form action="process.php" method="POST">

            <label class="label">Nama Pelajar</label>
            <input type="text" name="nama" class="input">

            <label class="label">No Matriks</label>
            <input type="text" name="matrik" class="input">

            <label class="label">Umur</label>
            <input type="number" name="umur" class="input">

            <label class="label">Program Pengajian</label>
            <select name="program" class="input">
                <option value="">-- Pilih Program --</option>
                <option>Diploma Teknologi Maklumat</option>
                <option>Diploma Perakaunan</option>
                <option>Diploma Pengajian Perniagaan</option>
            </select>

            <label class="label">Jantina</label>
            <input type="radio" name="jantina" value="Lelaki" class="radio"> Lelaki
            <input type="radio" name="jantina" value="Perempuan" class="radio"> Perempuan

            <label class="label">Alasan Sokongan (Minima 25 aksara)</label>
            <textarea name="alasan" class="textarea"></textarea>


            <label class="checkbox-container">
                Saya mengesahkan butiran maklumat ini adalah benar.
                <input type="checkbox" name="pengesahan" value="setuju">
                <span class="checkmark"></span>
            </label>

            <br>

            <button type="submit" class="btn-submit">Hantar</button>
            <button type="reset" class="btn-reset">Tetap Semula</button>

        </form>

    </div>

</body>

</html>