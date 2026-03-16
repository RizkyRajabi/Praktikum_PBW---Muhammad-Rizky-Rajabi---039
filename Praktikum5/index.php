<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Total Pembelian</title>
    <style>
        .container {
            border: 2px solid black;
            padding: 20px;
            width: 450px;
            font-family: "Times New Roman", Times, serif;
        }
        h2 {
            margin-top: 0;
            margin-bottom: 5px;
            font-size: 20px;
        }
        hr {
            border: 1px solid black;
            margin-bottom: 15px;
        }
        .bold-text {
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php
// kontanta untuk pajak
define("PAJAK", 0.10);

// array data barang
$barang = array(
    "nama" => "Keyboard",
    "harga" => 150000
);

// jumlah yang dibeli
$jumlah_beli = 2;

// perhitungan total harga menggunakan operator aritmatika
$total_sebelum_pajak = $barang["harga"] * $jumlah_beli;
$nominal_pajak = $total_sebelum_pajak * PAJAK;
$total_bayar = $total_sebelum_pajak + $nominal_pajak;

// fungsi untuk memformat angka menjadi format Rupiah
function formatRupiah($angka) {
    return "Rp " . number_format($angka, 0, ',', '.');
}
?>

<div class="container">
    <h2>Perhitungan Total Pembelian (Dengan Array)</h2>
    <hr>
    Nama Barang: <?php echo $barang["nama"]; ?><br>
    Harga Satuan: <?php echo formatRupiah($barang["harga"]); ?><br>
    Jumlah Beli: <?php echo $jumlah_beli; ?><br>
    Total Harga (Sebelum Pajak): <?php echo formatRupiah($total_sebelum_pajak); ?><br>
    Pajak (10%): <?php echo formatRupiah($nominal_pajak); ?><br>
    <span class="bold-text">Total Bayar: <?php echo formatRupiah($total_bayar); ?></span>
</div>

</body>
</html>