<!DOCTYPE html>
<html>

<head>
    <title>Borang Pinjaman Komputer</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <div class="logo-container">
            <img src="kpt.png" class="logo">
            <img src="poly.png" class="logo">
        </div>

        <h2 class="title">Borang Permohonan Skim Pinjaman Komputer Riba</h2>
        <form class="form-box" action="process.php" method="POST">

            <label class="label">Nama Pelajar</label>
            <input type="text" name="nama" class="input">

            <label class="label">No Matriks</label>
            <input type="text" name="matrik" class="input">

            <label class="label">Umur</label>
            <input type="number" name="umur" class="input">

            <label class="label">Program Pengajian</label>
            <select name="program" class="input">
                <option value="">-- Pilih Program --</option>
                <option value="Diploma Teknologi Kreatif Digital Produksi Video">Diploma Teknologi Kreatif Digital
                    Produksi Video</option>
                <option value="Diploma Teknologi Kreatif Digital Seni">Diploma Teknologi Kreatif Digital Seni</option>
                <option value="Diploma Perakaunan">Diploma Perakaunan</option>
                <option value="Diploma Sains Kesetiausahaan">Diploma Sains Kesetiausahaan</option>
                <option value="Diploma Pengajian Perniagaan">Diploma Pengajian Perniagaan</option>
                <option value="Diploma Kejuruteraan Mekanikal">Diploma Kejuruteraan Mekanikal</option>
                <option value="Diploma Perkhidmatan Makanan Amalan Halal">Diploma Perkhidmatan Makanan Amalan Halal
                </option>
                <option value="Diploma Pengurusan Resort">Diploma Pengurusan Resort</option>
                <option value="Diploma Pengurusan Pelancongan">Diploma Pengurusan Pelancongan</option>
                <option value="Diploma Pengurusan Acara">Diploma Pengurusan Acara</option>
                <option value="Diploma Teknologi Maklumat">Diploma Teknologi Maklumat</option>
                <option value="Diploma Kejuruteraan Elektronik (Telekomunikasi)">Diploma Kejuruteraan Elektronik
                    (Telekomunikasi)</option>
                <option value="Diploma Kejuruteraan Elektronik">Diploma Kejuruteraan Elektronik</option>
                <option value="Diploma Kejuruteraan Elektronik (Komputer)">Diploma Kejuruteraan Elektronik (Komputer)
                </option>
            </select>

            <label class="label">Jenis Laptop Diperlukan</label>

            <input type="radio" name="jenis_laptop" value="Standard (Windows)" class="radio"> Standard (Windows)
            <input type="radio" name="jenis_laptop" value="Macbook" class="radio"> Macbook

            <br><br>

            <label class="label">Tujuan Penggunaan</label>

            <input type="checkbox" name="tujuan[]" value="Assignment" class="check"> Assignment
            <input type="checkbox" name="tujuan[]" value="Programming" class="check"> Programming
            <input type="checkbox" name="tujuan[]" value="Design" class="check"> Design

            <br><br>

            <label class="label">Alasan Permohonan</label>
            <textarea name="alasan" class="textarea"></textarea>

            <br><br>

            <button type="submit" class="btn-submit">Hantar</button>
            <button type="reset" class="btn-reset">Tetap Semula</button>

        </form>

    </div>

</body>

</html>