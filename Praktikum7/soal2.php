<h2>Cetak Bilangan Genap </h2>

<form method="post">
    <label>Masukan batas maksimum:</label>
    <input type="number" name="batas">
    <button type="submit">Proses</button>
</form>

<?php
if (isset($_POST['batas'])) {
    $batas = $_POST['batas'];

    echo "Bilangan genap dari 2 sampai $batas:<br>";

    for ($i = 2; $i <= $batas; $i += 2) {
        echo $i . "<br>";
    }
}
?>