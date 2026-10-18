<<<<<<< HEAD
<?php
$pageTitle = "Tambah Kategori";
$pageSubtitle = "Buat kategori baru untuk mengelompokkan buku";
?>

=======
>>>>>>> 03958c65dff71fda706d1339697d2ad04ebcf54f
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Kategori - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/categories/create.css">
</head>
<body>
  <div class="app-shell">
<<<<<<< HEAD
  <?php require_once __DIR__ . "/../../components/admin/sidebar.php" ?>

    <main class="app-main">
    <?php require_once __DIR__ . "/../../components/admin/topbar.php" ?>
=======
    <?php require_once "../../components/admin/sidebar.php"; ?>

    <main class="app-main">
      <?php
      $pageTitle = 'Tambah Kategori';
      $pageSubtitle = 'Tambahkan kategori baru';
      
      require_once '../../components/admin/topbar.php';
      ?>
>>>>>>> 03958c65dff71fda706d1339697d2ad04ebcf54f

      <div class="app-content">
        <form method="POST" action="../../actions/categories/store.php">
          <div class="form-card">
            <div class="form-section-title">Data Kategori</div>
            <div class="form-group">
              <label for="name">Nama Kategori</label>
              <input type="text" id="name" name="name" placeholder="Contoh: Fiksi">
            </div>
            <div class="form-group">
              <label for="description">Deskripsi</label>
              <textarea id="description" name="description" rows="3" placeholder="Deskripsi singkat kategori"></textarea>
            </div>

            <div class="form-actions">
              <a href="index.php" class="btn btn-outline">Batal</a>
<<<<<<< HEAD
              <button type="submit" name="store" class="btn btn-primary">Simpan Kategori</button>
=======
              <button type="submit" class="btn btn-primary">Simpan Kategori</button>
>>>>>>> 03958c65dff71fda706d1339697d2ad04ebcf54f
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>
</html>
