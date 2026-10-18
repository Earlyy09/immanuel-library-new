<?php
<<<<<<< HEAD
if (isset($_POST['update']) && $_SERVER['REQUEST_METHOD'] === "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    print_r($_POST);
}

?>
=======

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? '';
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $role = $_POST['role'] ?? '';

    echo '<h2>Pengguna berhasil diperbarui</h2>';

    print_r([
        'id' => $id,
        'name' => $name,
        'email' => $email,
        'password' => $password,
        'role' => $role
    ]);
}
>>>>>>> 03958c65dff71fda706d1339697d2ad04ebcf54f
