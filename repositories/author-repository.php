<?php

function getAuthors()
{
<<<<<<< HEAD
  $authors = [
    ["id" => 1, "name" => "Andrea Hirata",          "total_books" => 1],
    ["id" => 2, "name" => "Tere Liye",               "total_books" => 1],
    ["id" => 3, "name" => "J.K. Rowling",            "total_books" => 1],
    ["id" => 4, "name" => "Pramoedya Ananta Toer",   "total_books" => 2],
    ["id" => 5, "name" => "Sapardi Djoko Damono",    "total_books" => 1],
  ];

  return $authors;
=======
    $authors = [
        ["id" => 1, "name" => "Andrea Hirata", "bio" => "Penulis asal Belitung, dikenal lewat novel Laskar Pelangi.", "total_books" => 1],
        ["id" => 2, "name" => "Tere Liye", "bio" => "Penulis produktif novel Indonesia.", "total_books" => 1],
        ["id" => 3, "name" => "J.K. Rowling", "bio" => "Penulis seri Harry Potter.", "total_books" => 1],
        ["id" => 4, "name" => "Pramoedya Ananta Toer", "bio" => "Sastrawan besar Indonesia.", "total_books" => 2],
        ["id" => 5, "name" => "Sapardi Djoko Damono", "bio" => "Penyair Indonesia.", "total_books" => 1],
    ];

    return $authors;
>>>>>>> 03958c65dff71fda706d1339697d2ad04ebcf54f
}

function getAuthor()
{
<<<<<<< HEAD
  $author = [
    "id"   => 1,
    "name" => "Andrea Hirata",
    "bio"  => "Penulis asal Belitung, dikenal lewat novel Laskar Pelangi.",
  ];

  return $author;
}
=======
    return [
        "id" => 1,
        "name" => "Andrea Hirata",
        "bio" => "Penulis asal Belitung, dikenal lewat novel Laskar Pelangi.",
        "total_books" => 1
    ];
}
>>>>>>> 03958c65dff71fda706d1339697d2ad04ebcf54f
