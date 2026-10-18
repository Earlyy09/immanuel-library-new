<?php

<<<<<<< HEAD
require_once __DIR__ . "/../../config/database.php";

if (isset($_GET['id']) && $_SERVER['REQUEST_METHOD'] === "GET") {
    try {
        $pdo->beginTransaction();
        $id = $_GET['id'];

        // Delete relation data (Book Author)
        $query = "delete from book_author where book_id = :book_id";
        $stmt = $pdo->prepare($query);
        $stmt->execute([
            "book_id" => $id
        ]);

        // Delete Book data
        $query = "delete from books where id = :id";
        $stmt = $pdo->prepare($query);
        $stmt->execute([
            "id" => $id
        ]);

        $pdo->commit();

        header("Location: ../../pages/books/index.php");
        exit;

    } catch (PDOException $e) {
        $pdo->rollBack();
        throw $e;
    }
=======
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    echo '<h2>Buku berhasil dihapus</h2>';
    echo 'ID buku yang dihapus: ' . htmlspecialchars((string) $id);
} else {
    echo 'ID buku tidak ditemukan.';
>>>>>>> 03958c65dff71fda706d1339697d2ad04ebcf54f
}