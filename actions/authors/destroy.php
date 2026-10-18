<?php
<<<<<<< HEAD
if (isset($_GET['id']) && $_SERVER['REQUEST_METHOD'] === "GET") {
    $id = $_GET['id'];

    echo "Penulis dengan id " . htmlspecialchars($id) . " berhasil dihapus.";
}

?>
=======
if (isset($_GET['id'])) {
  echo "Penulis dengan id " . htmlspecialchars($_GET['id']) . " berhasil dihapus.";
} else {
  echo "ID penulis tidak ditemukan.";
}
>>>>>>> 03958c65dff71fda706d1339697d2ad04ebcf54f
