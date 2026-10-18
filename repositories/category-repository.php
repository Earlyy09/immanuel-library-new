<?php
<<<<<<< HEAD
require_once __DIR__ . "/../config/database.php";

function getCategories()
{
    global $pdo;

    $query = "select * from categories";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $categories = $stmt->fetchAll();
=======

function getCategories()
{
    $categories = [
        ["id" => 1, "name" => "Fiksi", "description" => "Novel dan cerita rekaan", "total_books" => 3],
        ["id" => 2, "name" => "Sains", "description" => "Buku ilmu pengetahuan alam", "total_books" => 0],
        ["id" => 3, "name" => "Sejarah", "description" => "Buku sejarah dan biografi", "total_books" => 1],
        ["id" => 4, "name" => "Teknologi", "description" => "Buku pemrograman dan teknologi", "total_books" => 0],
    ];
>>>>>>> 03958c65dff71fda706d1339697d2ad04ebcf54f

    return $categories;
}

function getCategory()
{
<<<<<<< HEAD
    $category = [
        "id" => 1,
        "name" => "Fiksi",
        "description" => "Novel dan cerita rekaan",
    ];

    return $category;
}

=======
    return [
        "id" => 1,
        "name" => "Fiksi",
        "description" => "Novel dan cerita rekaan",
        "total_books" => 3
    ];
}
>>>>>>> 03958c65dff71fda706d1339697d2ad04ebcf54f
