<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penentu Nilai Mahasiswa</title>
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: 300px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Form Penentu Nilai Mahasiswa</h2>
    <form method="POST" action="">
        <div class="form-group">
            <label for="nama">Nama Mahasiswa:</label>
            <input type="text" id="nama" name="nama">
        </div> <div class="form-group">
            <label for="nilai">Nilai Mata Kuliah:</label>
            <input type="text" id="nilai" name="nilai">
        </div> 
        <button type="submit">Submit</button>
    </form> 

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $nilai = $_POST["nilai"];

    if (empty($nama) || empty($nilai)) {
        echo "<h3>Mohon isi semua field.</h3>";
    } elseif (!is_numeric($nilai) || $nilai < 0 || $nilai > 100) {
        echo "<h3>Nilai harus berupa angka antara 0 dan 100.</h3>";
    } else {
       
        if ($nilai >= 85 && $nilai <= 100) {
            $grade = 'A';
        } elseif ($nilai >= 75 && $nilai <= 84) {
            $grade = 'B';
        } elseif ($nilai >= 65 && $nilai <= 74) {
            $grade = 'C';
        } elseif ($nilai >= 50 && $nilai <= 64) {
            $grade = 'D';
        } elseif ($nilai >= 0 && $nilai <= 49) {
            $grade = 'E';
        }
        
        if ($grade == 'A' || $grade == 'B' || $grade == 'C') {
            $status = 'Lulus';
        } else {
            $status = 'Tidak Lulus';
        }

        echo "<h3>Hasil Penentuan Nilai Mahasiswa</h3>";
        echo "<p>Nama Mahasiswa: <b>$nama</b></p>";
        echo "<p>Nilai Mata Kuliah: <b>$nilai</b></p>";
        echo "<p>Grade: <b>$grade</b></p>";
        echo "<p>Status: <b>" . $status . "</b></p>";
    }
}   
    
  ?>
</body>
</html>