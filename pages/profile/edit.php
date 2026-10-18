<<<<<<< HEAD
<?php
require_once __DIR__ . "/../../repositories/user-repository.php";

$user = getUser();
$profile = getProfile();

$pageTitle = "Profil Saya";
$pageSubtitle = "Kelola data akun dan profil Anda";
?>

=======
>>>>>>> 03958c65dff71fda706d1339697d2ad04ebcf54f
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Saya - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/profile/edit.css">
</head>
<body>
<<<<<<< HEAD
  <div class="app-shell">
  <?php require_once __DIR__ . "/../../components/admin/sidebar.php" ?>

    <main class="app-main">
    <?php require_once __DIR__ . "/../../components/admin/topbar.php" ?>
=======
  <?php
  require '../../repositories/user-repository.php';
  
  $user = getUser();
  $profile = getProfile();
  ?>
  <div class="app-shell">
    <?php require_once "../../components/admin/sidebar.php"; ?>

    <main class="app-main">
      <?php
      $pageTitle = 'Profil Saya';
      $pageSubtitle = 'Kelola informasi profil akun';
      require_once '../../components/admin/topbar.php';
      ?>
>>>>>>> 03958c65dff71fda706d1339697d2ad04ebcf54f

      <div class="app-content">
        <form method="POST" action="../../actions/profile/update.php">
          <div class="form-card" style="margin-bottom:20px;">
            <div class="form-section-title">Data Akun</div>
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
                <!-- Perbaikan: Tambah spasi <input type=... dan aman dari undefined key -->
                <input type="text" id="name" name="name" value="<?= htmlspecialchars($user['name'] ?? '') ?>">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <!-- Perbaikan: Tambah null coalescing operator ?? '' -->
                <input type="email" id="email" name="email" value="<?= htmlspecialchars($user['email'] ?? '') ?>"> 
>>>>>>> 03958c65dff71fda706d1339697d2ad04ebcf54f
              </div>
            </div>
            <div class="form-group">
              <label>Role</label>
<<<<<<< HEAD
              <input type="text" value="<?= ucfirst($user['role']) ?>" disabled>
=======
              <input type="text" value="<?= htmlspecialchars(ucfirst($user['role'] ?? 'Member')) ?>" disabled>
>>>>>>> 03958c65dff71fda706d1339697d2ad04ebcf54f
              <p class="form-help">Role hanya dapat diubah oleh Admin melalui menu Manajemen Pengguna.</p>
            </div>
          </div>

          <div class="form-card">
            <div class="form-section-title">Data Profil</div>
            <div class="form-group">
              <label for="phone">Nomor Telepon</label>
<<<<<<< HEAD
              <input type="text" id="phone" name="phone" value="<?= $profile['phone'] ?>">
            </div>
            <div class="form-group">
              <label for="address">Alamat</label>
              <input type="text" id="address" name="address" value="<?= $profile['address'] ?>">
            </div>
            <div class="form-group">
              <label for="bio">Bio Singkat</label>
              <textarea id="bio" name="bio" rows="3"><?= $profile['bio'] ?></textarea>
            </div>
            <div class="form-actions">
              <button type="button" class="btn btn-outline">Batal</button>
              <button type="submit" name="update" class="btn btn-primary">Simpan Perubahan</button>
=======
              <input type="text" id="phone" name="phone" value="<?= htmlspecialchars($profile['phone'] ?? '') ?>">
            </div>
            <div class="form-group">
              <label for="address">Alamat</label>
              <input type="text" id="address" name="address" value="<?= htmlspecialchars($profile['address'] ?? '') ?>">
            </div>
            <div class="form-group">
              <label for="bio">Bio Singkat</label>
              <textarea id="bio" name="bio" rows="3"><?= htmlspecialchars($profile['bio'] ?? '') ?></textarea>
            </div>
            <div class="form-actions">
              <a href="../books/index.php" class="btn btn-outline">Batal</a>
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
