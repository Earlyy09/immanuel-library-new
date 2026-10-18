<?php
<<<<<<< HEAD
if (isset($_POST['store']) && $_SERVER['REQUEST_METHOD'] === "POST") {
    $name = $_POST['name'];
    $bio = $_POST['bio'];

    print_r($_POST);
}

?>
=======

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';

    echo '<h2>Penulis berhasil diterima</h2>';

    print_r([
        'name' => $name
    ]);
}
>>>>>>> 03958c65dff71fda706d1339697d2ad04ebcf54f
