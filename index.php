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
<option value="Diploma Teknologi Kreatif Digital Produksi Video">Diploma Teknologi Kreatif Digital Produksi Video</option>
<option value="Diploma Teknologi Kreatif Digital Seni">Diploma Teknologi Kreatif Digital Seni</option>
<option value="Diploma Perakaunan">Diploma Perakaunan</option>
<option value="Diploma Sains Kesetiausahaan">Diploma Sains Kesetiausahaan</option>
<option value="Diploma Pengajian Perniagaan">Diploma Pengajian Perniagaan</option>
<option value="Diploma Kejuruteraan Mekanikal">Diploma Kejuruteraan Mekanikal</option>
<option value="Diploma Perkhidmatan Makanan Amalan Halal">Diploma Perkhidmatan Makanan Amalan Halal</option>
<option value="Diploma Pengurusan Resort">Diploma Pengurusan Resort</option>
<option value="Diploma Pengurusan Pelancongan">Diploma Pengurusan Pelancongan</option>
<option value="Diploma Pengurusan Acara">Diploma Pengurusan Acara</option>
<option value="Diploma Teknologi Maklumat">Diploma Teknologi Maklumat</option>
<option value="Diploma Kejuruteraan Elektronik (Telekomunikasi)">Diploma Kejuruteraan Elektronik (Telekomunikasi)</option>
<option value="Diploma Kejuruteraan Elektronik">Diploma Kejuruteraan Elektronik</option>
<option value="Diploma Kejuruteraan Elektronik (Komputer)">Diploma Kejuruteraan Elektronik (Komputer)</option>
</select>

<label class="label">Kemudahan Internet</label>

<input type="checkbox" name="internet[]" value="WiFi" class="check"> WiFi
<input type="checkbox" name="internet[]" value="Data Mobile" class="check"> Data Mobile

<br><br>

<label class="label">Status Pelajar</label>

<input type="radio" name="status" value="Sepenuh Masa" class="radio"> Sepenuh Masa
<input type="radio" name="status" value="Separuh Masa" class="radio"> Separuh Masa

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