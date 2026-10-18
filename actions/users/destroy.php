<?php
<<<<<<< HEAD
if (isset($_GET['id']) && $_SERVER['REQUEST_METHOD'] === "GET") {
    $id = $_GET['id'];

    echo "Pengguna dengan id " . htmlspecialchars($id) . " berhasil dihapus.";
}

?>
=======

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    echo '<h2>Pengguna berhasil dihapus</h2>';
    echo 'ID pengguna yang dihapus: ' . htmlspecialchars((string) $id);
} else {
    echo 'ID pengguna tidak ditemukan.';
}
>>>>>>> 03958c65dff71fda706d1339697d2ad04ebcf54f
