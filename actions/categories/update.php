<?php
<<<<<<< HEAD
if (isset($_POST['update']) && $_SERVER['REQUEST_METHOD'] === "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];

    print_r($_POST);
}

?>
=======

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? '';
    $name = $_POST['name'] ?? '';

    echo '<h2>Kategori berhasil diperbarui</h2>';

    print_r([
        'id' => $id,
        'name' => $name
    ]);
}
>>>>>>> 03958c65dff71fda706d1339697d2ad04ebcf54f
