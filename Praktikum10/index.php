<?php
session_start();
if (!isset($_SESSION['login_Un51k4'])) {
  header("Location: login.php?message=" .
    urlencode("Mengakses fitur harus login dulu bro."));
  exit;
}
?>

<?php include 'proses_index.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="output.css">
  <title>Daftar Buku</title>
</head>

<body class="bg-gray-50 min-h-screen">

  <?php include 'nav.php'; ?>

  <div class="max-w-7xl mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Daftar Buku</h2>

    <!-- Form Pencarian -->
    <form method="get" class="flex flex-wrap gap-4 mb-6 items-end">
      <div class="flex flex-col">
        <label for="judul" class="text-sm font-medium text-gray-700 mb-1">Cari Berdasarkan Judul</label>
        <input
          type="text"
          class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
          id="judul"
          name="judul"
          placeholder="Masukkan judul buku"
          value="<?php echo htmlspecialchars($search_judul) ?>">
      </div>

      <div class="flex flex-col">
        <label for="tahun_terbit" class="text-sm font-medium text-gray-700 mb-1">Cari Berdasarkan Tahun Terbit</label>
        <input
          type="number"
          class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
          id="tahun_terbit"
          name="tahun_terbit"
          placeholder="Masukkan tahun terbit"
          value="<?php echo htmlspecialchars($search_tahun) ?>">
      </div>

      <button
        type="submit"
        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-2 rounded-lg transition">
        Cari
      </button>

      <a
        href="index.php"
        class="bg-gray-400 hover:bg-gray-500 text-white font-semibold px-5 py-2 rounded-lg transition">
        Reset
      </a>
    </form>

    <!-- Tabel Daftar Buku -->
    <div class="overflow-x-auto rounded-lg shadow">
      <table class="min-w-full bg-white text-sm text-gray-700">
        <thead class="bg-gray-800 text-white">
          <tr>
            <th class="px-4 py-3 text-left">ID</th>
            <th class="px-4 py-3 text-left">Judul</th>
            <th class="px-4 py-3 text-left">Penulis</th>
            <th class="px-4 py-3 text-left">Tahun Terbit</th>
            <th class="px-4 py-3 text-left">Harga</th>
            <th class="px-4 py-3 text-left">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = $result->fetch_assoc()): ?>
            <tr class="border-b hover:bg-gray-50 transition">
              <td class="px-4 py-3"><?php echo $row['ID'] ?></td>
              <td class="px-4 py-3"><?php echo htmlspecialchars($row['Judul']) ?></td>
              <td class="px-4 py-3"><?php echo htmlspecialchars($row['Penulis']) ?></td>
              <td class="px-4 py-3"><?php echo $row['Tahun_Terbit'] ?></td>
              <td class="px-4 py-3">Rp<?php echo number_format($row['Harga'], 2) ?></td>
              <td class="px-4 py-3 flex gap-2">
                <a
                  href="form_edit.php?id=<?php echo $row['ID'] ?>"
                  class="bg-yellow-400 hover:bg-yellow-500 text-white text-xs font-semibold px-3 py-1 rounded transition">
                  Edit
                </a>
                <a
                  href="proses_hapus.php?id=<?php echo $row['ID'] ?>"
                  class="bg-red-500 hover:bg-red-600 text-white text-xs font-semibold px-3 py-1 rounded transition"
                  onclick="return confirm('Yakin ingin menghapus?')">
                  Hapus
                </a>
              </td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>

</body>

</html>