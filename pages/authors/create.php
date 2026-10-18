<<<<<<< HEAD
<?php
$pageTitle = "Tambah Penulis";
$pageSubtitle = "Daftarkan penulis baru ke sistem";
?>

=======
>>>>>>> 03958c65dff71fda706d1339697d2ad04ebcf54f
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Penulis - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/authors/create.css">
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
      $pageTitle = 'Tambah Penulis';
      $pageSubtitle = 'Tambahkan penulis baru';
      
      require_once '../../components/admin/topbar.php';
      ?>
>>>>>>> 03958c65dff71fda706d1339697d2ad04ebcf54f

      <div class="app-content">
        <form method="POST" action="../../actions/authors/store.php">
          <div class="form-card">
            <div class="form-section-title">Data Penulis</div>
            <div class="form-group">
              <label for="name">Nama Penulis</label>
              <input type="text" id="name" name="name" placeholder="Contoh: Tere Liye">
            </div>
            <div class="form-group">
              <label for="bio">Biografi Singkat</label>
              <textarea id="bio" name="bio" rows="3" placeholder="Biografi singkat penulis"></textarea>
            </div>
            <div class="form-actions">
              <a href="index.php" class="btn btn-outline">Batal</a>
<<<<<<< HEAD
              <button type="submit" name="store" class="btn btn-primary">Simpan Penulis</button>
=======
              <button type="submit" class="btn btn-primary">Simpan Penulis</button>
>>>>>>> 03958c65dff71fda706d1339697d2ad04ebcf54f
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>
</html>
