<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['id' => 1, 'name' => 'admin'],
            ['id' => 2, 'name' => 'user'],
        ]);

        DB::table('genre')->insert([
            ['name' => 'Fiction'],
            ['name' => 'Non-fiction'],
            ['name' => 'Science Fiction'],
            ['name' => 'Mystery'],
            ['name' => 'Romance'],
            ['name' => 'Fantasy'],
        ]);

        DB::table('users')->insert([
            ['username' => 'admin','roleId' => 1, 'email' => 'admin@gmail.com', 'password' => bcrypt('password')],
            ['username' => 'user', 'roleId' => 2, 'email' => 'user@gmail.com', 'password' => bcrypt('password')],
        ]);

        DB::table('books')->insert([
            ['title' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald', 'genreId' => 1, 'description' => 'A classic novel about the American Dream.', 'price' => 9.99, 'stockedQuantity' => 100],
            ['title' => 'To Kill a Mockingbird', 'author' => 'Harper Lee', 'genreId' => 1, 'description' => 'A story of racial injustice and moral growth.', 'price' => 8.99, 'stockedQuantity' => 80], ['title' => 'To Kill a Mockingbird', 'author' => 'Harper Lee', 'genreId' => 1, 'description' => 'A story of racial injustice and moral growth.', 'price' => 8.99, 'stockedQuantity' => 80],
            ['title' => '1984', 'author' => 'George Orwell', 'genreId' => 3, 'description' => 'A dystopian novel about a totalitarian regime.', 'price' => 7.99, 'stockedQuantity' => 60],
            ['title' => 'The Da Vinci Code', 'author' => 'Dan Brown', 'genreId' => 4, 'description' => 'A mystery thriller', 'price' => 6.99, 'stockedQuantity' => 40],
            ['title' => 'Pride and Prejudice', 'author' => 'Jane Austen', 'genreId' => 5, 'description' => 'A romantic novel about love and marriage.', 'price' => 5.99, 'stockedQuantity' => 20],
            ['title' => 'The Hobbit', 'author' => 'J.R.R. Tolkien', 'genreId' => 6, 'description' => 'A fantasy novel about a hobbit on an adventure.', 'price' => 4.99, 'stockedQuantity' => 10],
        ]);

        DB::table('orders')->insert([
            ['userId' => 1, 'orderDate' => now(), 'totalQuantity' => 3],
            ['userId' => 2, 'orderDate' => now()->subDays(2), 'totalQuantity' => 2],
            ['userId' => 3, 'orderDate' => now()->subDays(5), 'totalQuantity' => 1],
            ['userId' => 4, 'orderDate' => now()->subDays(7), 'totalQuantity' => 4],
            ['userId' => 5, 'orderDate' => now()->subDays(10), 'totalQuantity' => 2],
        ]);

        DB::table('orderItems')->insert([
            ['orderId' => 1, 'bookId' => 1, 'quantity' => 1],
            ['orderId' => 1, 'bookId' => 2, 'quantity' => 2],
            ['orderId' => 2, 'bookId' => 2, 'quantity' => 1],
            ['orderId' => 3, 'bookId' => 3, 'quantity' => 1],
            ['orderId' => 4, 'bookId' => 4, 'quantity' => 2],
            ['orderId' => 4, 'bookId' => 5, 'quantity' => 2],
            ['orderId' => 5, 'bookId' => 6, 'quantity' => 2],
        ]);
    }
}
