<!DOCTYPE html>
<html>
<head>
    <title>Latihan Praktikum Bab 8 PHP Dinamis</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        a {
            text-decoration: none;
            color: #007BFF;
            margin-right: 15px;
        }
        a:hover {
            text-decoration: underline;
        }
        
            
    </style>
</head>
<body>
<div class="container">
<h2>Menu Navigasi</h2>

<a href="?halaman=kendaraan">Soal 1</a> |
<a href="?halaman=genap">Soal 2</a> |
<a href="?halaman=hewan">Soal 3</a> |
<a href="?halaman=cek">Soal 4</a>

<hr>
</div>

<?php
if (isset($_GET['halaman'])) {
    switch ($_GET['halaman']) {
        case 'kendaraan':
            include "Soal1.php";
            break;
        case 'genap':
            include "soal2.php";
            break;
        case 'hewan':
            include "soal3.php";
            break;
        case 'cek':
            include "soal4.php";
            break;
        default:
            echo "Halaman tidak ditemukan";
    }
} else {
    echo "Silakan pilih menu.";
}
?>

</body>
</html>