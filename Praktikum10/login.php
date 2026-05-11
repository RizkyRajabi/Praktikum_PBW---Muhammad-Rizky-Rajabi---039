<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <link rel="stylesheet" href="output.css">
</head>

<body class="min-h-screen bg-gray-100 flex items-center justify-center">

  <div class="bg-white shadow-md rounded-lg p-8 w-full max-w-md">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Masuk ke dalam Sistem</h2>

    <?php if (isset($_GET['message'])): ?>
      <div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded mb-4">
        <?= htmlspecialchars($_GET['message']) ?>
      </div>
    <?php endif; ?>

    <form method="post" action="proses_login.php">
      <div class="mb-4">
        <label class="block text-gray-700 font-medium mb-1">Nama Pengguna :</label>
        <input
          type="text"
          name="username"
          class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
          required>
      </div>

      <div class="mb-6">
        <label class="block text-gray-700 font-medium mb-1">Kata Sandi :</label>
        <input
          type="password"
          name="password"
          class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
          required>
      </div>

      <button
        type="submit"
        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">
        Login
      </button>
    </form>
  </div>

</body>

</html>
