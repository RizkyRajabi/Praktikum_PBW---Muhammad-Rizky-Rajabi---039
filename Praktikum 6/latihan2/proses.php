<?php
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$semester = $_POST['semester'];
$ukt = $_POST['ukt'];

$diskon = 0;

// aturan diskon
if ($ukt >= 5000000) {
    $diskon = 10;

    if ($semester > 8) {
        $diskon = 15;
    }
}

// hitung
$potongan = ($diskon / 100) * $ukt;
$total = $ukt - $potongan;
?>

<h2>Diskon UKT Mahasiswa</h2>

<p>NPM : <?php echo $npm; ?></p>
<p>Nama : <?php echo $nama; ?></p>
<p>Prodi : <?php echo $prodi; ?></p>
<p>Semester : <?php echo $semester; ?></p>
<p>Biaya UKT : <?php echo number_format($ukt, 0, ',', '.'); ?></p>
<p>Diskon : <?php echo $diskon; ?>%</p>
<p>Yang Harus Dibayar : <?php echo number_format($total, 0, ',', '.'); ?></p>