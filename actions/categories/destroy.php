<?php
<<<<<<< HEAD
if (isset($_GET['id']) && $_SERVER['REQUEST_METHOD'] === "GET") {
    $id = $_GET['id'];

    echo "Kategori dengan id " . htmlspecialchars($id) . " berhasil dihapus.";
}

?>
=======

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    echo '<h2>Kategori berhasil dihapus</h2>';
    echo 'ID kategori yang dihapus: ' . htmlspecialchars((string) $id);
} else {
    echo 'ID kategori tidak ditemukan.';
}
>>>>>>> 03958c65dff71fda706d1339697d2ad04ebcf54f
