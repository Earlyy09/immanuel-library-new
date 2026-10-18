<<<<<<< HEAD
<?php
require_once __DIR__ . "/../../repositories/author-repository.php";

$author = getAuthor();

$pageTitle = "Edit Penulis";
$pageSubtitle = "Perbarui data penulis";
?>

=======
>>>>>>> 03958c65dff71fda706d1339697d2ad04ebcf54f
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Penulis - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/authors/edit.css">
</head>

<body>
<<<<<<< HEAD
  <div class="app-shell">
    <?php require_once __DIR__ . "/../../components/admin/sidebar.php" ?>

    <main class="app-main">
      <?php require_once __DIR__ . "/../../components/admin/topbar.php" ?>

      <div class="app-content">
        <form method="POST" action="../../actions/authors/update.php">
          <input type="hidden" name="id" value="<?= $author['id'] ?>">
=======
  <?php
  require '../../repositories/author-repository.php';
  $author = getAuthor();

  // Jika data penulis tidak ditemukan/kosong, alihkan kembali ke halaman utama
  if (!$author) {
      header('Location: index.php');
      exit;
  }
  ?>
  <div class="app-shell">
    <?php require_once "../../components/admin/sidebar.php"; ?>

    <main class="app-main">
      <?php
      $pageTitle = 'Edit Penulis';
      $pageSubtitle = 'Perbarui informasi penulis';
      
      require_once '../../components/admin/topbar.php';
      ?>

      <div class="app-content">
        <form method="POST" action="../../actions/authors/update.php">
          <input type="hidden" name="id" value="<?= htmlspecialchars($author['id'] ?? '') ?>">
>>>>>>> 03958c65dff71fda706d1339697d2ad04ebcf54f
          <div class="form-card">
            <div class="form-section-title">Data Penulis</div>
            <div class="form-group">
              <label for="name">Nama Penulis</label>
<<<<<<< HEAD
              <input type="text" id="name" name="name" value="<?= $author['name'] ?>">
            </div>
            <div class="form-group">
              <label for="bio">Biografi Singkat</label>
              <textarea id="bio" name="bio" rows="3"><?= $author['bio'] ?></textarea>
            </div>
            <div class="form-actions">
              <a href="index.php" class="btn btn-outline">Batal</a>
              <button type="submit" name="update" class="btn btn-primary">Simpan Perubahan</button>
=======
              <input type="text" id="name" name="name" value="<?= htmlspecialchars($author['name'] ?? '') ?>">
            </div>
            <div class="form-group">
              <label for="bio">Biografi Singkat</label>
              <textarea id="bio" name="bio" rows="3"><?= htmlspecialchars($author['bio'] ?? '') ?></textarea>
            </div>
            <div class="form-actions">
              <a href="index.php" class="btn btn-outline">Batal</a>
              <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
>>>>>>> 03958c65dff71fda706d1339697d2ad04ebcf54f
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>

</html>