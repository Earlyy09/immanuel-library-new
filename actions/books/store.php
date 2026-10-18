<?php
<<<<<<< HEAD
require_once __DIR__ . "/../../config/database.php";

if (isset($_POST['store']) && $_SERVER['REQUEST_METHOD'] === "POST") {
    try {
        $pdo->beginTransaction();

        $title = htmlspecialchars($_POST['title']);
        $isbn = htmlspecialchars($_POST['isbn']);
        $year = htmlspecialchars($_POST['year']);
        $stock = htmlspecialchars($_POST['stock']);
        $description = htmlspecialchars($_POST['description']);
        $categoryId = htmlspecialchars($_POST['category_id']);

        $query = "insert into books (title, isbn, year, stock, description, category_id)
                    values (:title, :isbn, :year, :stock, :description, :category_id)
                    ";
        $stmt = $pdo->prepare($query);
        $stmt->execute([
            'title' => $title,
            'isbn' => $isbn,
            'year' => $year,
            'stock' => $stock,
            'description' => $description,
            'category_id' => $categoryId
        ]);

        $bookId = $pdo->lastInsertId();

        $query = "insert into book_author (book_id, author_id) values (:book_id, :author_id)";
        $stmt = $pdo->prepare($query);

        $authorIds = $_POST['author_ids'];
        foreach ($authorIds as $authorId) {
            $stmt->execute([
                'book_id' => $bookId,
                'author_id' => htmlspecialchars($authorId)
            ]);
        }

        $pdo->commit();

        header('Location: ../../pages/books/index.php');
        exit;

    } catch (PDOException $e) {
        $pdo->rollBack();
        throw $e;
    }
}
?>
=======
require_once '../../repositories/book-repository.php'; // Sesuaikan repository buku Anda jika ada

// 1. Pastikan request menggunakan method POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "Akses tidak valid.";
    exit;
}

// 2. Validasi kelengkapan data
if (
    isset($_POST['title'], $_POST['isbn'], $_POST['year'], $_POST['stock'], $_POST['category_id'], $_POST['description'])
) {
    $data = [
        'title'       => trim($_POST['title']),
        'isbn'        => trim($_POST['isbn']),
        'year'        => (int) $_POST['year'],
        'stock'       => (int) $_POST['stock'],
        'category_id' => (int) $_POST['category_id'],
        'description' => trim($_POST['description']),
        'author_ids'  => $_POST['author_ids'] ?? [],
    ];

    // Untuk pengujian/debug:
    echo "Buku baru berhasil diterima:<br>";
    echo "<pre>";
    print_r($data);
    echo "</pre>";

    // Jika ingin langsung mengarahkan kembali setelah simpan data ke DB:
    // storeBook($data);
    // header('Location: ../../pages/books/index.php');
    // exit;
} else {
    echo "Data buku tidak lengkap.";
}
>>>>>>> 03958c65dff71fda706d1339697d2ad04ebcf54f
