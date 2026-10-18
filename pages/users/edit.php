<<<<<<< HEAD
<?php
require_once __DIR__ . "/../../repositories/user-repository.php";

$user = getUser();

$pageTitle = "Edit Pengguna";
$pageSubtitle = "Perbarui data dan role pengguna";
?>

=======
>>>>>>> 03958c65dff71fda706d1339697d2ad04ebcf54f
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Pengguna - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/users/edit.css">
</head>
<body>
<<<<<<< HEAD
  <div class="app-shell">
  <?php require_once __DIR__ . "/../../components/admin/sidebar.php" ?>

    <main class="app-main">
    <?php require_once __DIR__ . "/../../components/admin/topbar.php" ?>

      <div class="app-content">
        <form method="POST" action="../../actions/users/update.php">
          <input type="hidden" name="id" value="<?= $user['id'] ?>">
=======
  <?php
  require '../../repositories/user-repository.php';
  $user = getUser();

  // Jika data pengguna tidak ditemukan, alihkan kembali ke halaman utama
  if (!$user) {
      header('Location: index.php');
      exit;
  }
  ?>
  <div class="app-shell">
    <?php require_once "../../components/admin/sidebar.php"; ?>

    <main class="app-main">
      <?php
      $pageTitle = 'Edit Pengguna';
      $pageSubtitle = 'Perbarui informasi akun pengguna';

      require_once '../../components/admin/topbar.php';
      ?>

      <div class="app-content">
        <form method="POST" action="../../actions/users/update.php">
          <input type="hidden" name="id" value="<?= htmlspecialchars($user['id'] ?? '') ?>">
>>>>>>> 03958c65dff71fda706d1339697d2ad04ebcf54f
          <div class="form-card">
            <div class="form-section-title">Data Pengguna</div>
            <div class="form-row">
              <div class="form-group">
                <label for="name">Nama Lengkap</label>
<<<<<<< HEAD
                <input type="text" id="name" name="name" value="<?= $user['name'] ?>">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?= $user['email'] ?>">
=======
                <input type="text" id="name" name="name" value="<?= htmlspecialchars($user['name'] ?? '') ?>">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?= htmlspecialchars($user['email'] ?? '') ?>">
>>>>>>> 03958c65dff71fda706d1339697d2ad04ebcf54f
              </div>
            </div>
            <div class="form-group">
              <label for="role">Role</label>
              <select id="role" name="role">
<<<<<<< HEAD
                <option value="member" <?= $user['role'] === 'member' ? 'selected' : '' ?>>Member</option>
                <option value="admin" <?= $user['role'] === 'admin' ? 'selected' : '' ?>>Admin</option>
=======
                <option value="member" <?= (($user['role'] ?? '') === 'member') ? 'selected' : '' ?>>Member</option>
                <option value="admin" <?= (($user['role'] ?? '') === 'admin') ? 'selected' : '' ?>>Admin</option>
>>>>>>> 03958c65dff71fda706d1339697d2ad04ebcf54f
              </select>
            </div>

            <div class="form-actions">
              <a href="index.php" class="btn btn-outline">Batal</a>
<<<<<<< HEAD
              <button type="submit" name="update" class="btn btn-primary">Simpan Perubahan</button>
=======
              <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
>>>>>>> 03958c65dff71fda706d1339697d2ad04ebcf54f
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> 03958c65dff71fda706d1339697d2ad04ebcf54f
