<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    /**
     * The function inserts book data into a database table in PHP.
     */
    public function run(): void
    {
        /* The code `DB::table('books')->insert([...])` is inserting a new row of data into the 'books'
        table of the database. The data being inserted includes the book name, price, details, type,
        and image. In this specific example, it is inserting a book with the name 'MBBS 2nd Year
        Book', price of '150', details of 'Very good book for MBBS Students', type of '1', and an
        image named 'images_1.jpg'. */
        DB::table('books')->insert([
            'book_name' => 'MBBS 2nd Year Book',
            'book_price' => '150',
            'book_details' => 'Very good book for MBBS Students',
            'book_type' => '1',
            'book_img' => 'images_1.jpg',
        ]);

        DB::table('books')->insert([
            'book_name' => 'Medical Test Paper',
            'book_price' => '250',
            'book_details' => 'Test paper to solve questions',
            'book_type' => '2',
            'book_img' => 'images_2.jpg',
        ]);

        DB::table('books')->insert([
            'book_name' => 'MBBS 3rd Year Anthopology',
            'book_price' => '150',
            'book_details' => 'Very good anthopology books for MBBS Students',
            'book_type' => '1',
            'book_img' => 'images_3.jpg',
        ]);

        DB::table('books')->insert([
            'book_name' => 'Heart Disease Solvers',
            'book_price' => '1000',
            'book_details' => 'Reading this bboks for heart issues',
            'book_type' => '3',
            'book_img' => 'images_4.jpg',
        ]);

        DB::table('books')->insert([
            'book_name' => 'Harrisons Principles of Internal Medicine',
            'book_price' => '120',
            'book_details' => 'edited by J. Larry Jameson, MD, PhD, Anthony S. Fauci, MD, Dennis L. Kasper, MD, et al    ',
            'book_type' => '3',
            'book_img' => 'images_5.jpg',
        ]);

        DB::table('books')->insert([
            'book_name' => 'Being Mortal: Medicine and What Matters in the End',
            'book_price' => '240',
            'book_details' => 'Written by a surgeon, Being Mortal is an examination of how medicine can improve quality of life—and also provide a rich and dignified death.',
            'book_type' => '1',
            'book_img' => 'images_6.jpg',
        ]);
        DB::table('books')->insert([
            'book_name' => 'The Emperor of All Maladies: A Biography of Cancer',
            'book_price' => '180',
            'book_details' => 'Winner of the Pulitzer Prize for General Non-Fiction, The Emperor of All Maladies is the story of cancer',
            'book_type' => '2',
            'book_img' => 'images_7.jpg',
        ]);

        DB::table('books')->insert([
            'book_name' => 'Harrisons Principles of Internal Medicine',
            'book_price' => '120',
            'book_details' => 'edited by J. Larry Jameson, MD, PhD, Anthony S. Fauci, MD, Dennis L. Kasper, MD, et al    ',
            'book_type' => '1',
            'book_img' => 'images_8.jpg',
        ]);

        DB::table('books')->insert([
            'book_name' => 'Atlas of Human Anatomy',
            'book_price' => '140',
            'book_details' => 'Now in its 7th edition, Netters Atlas of Human Anatomy is the only anatomy atlas illustrated by physicians, providing clear-cut views of the human body along with clinical perspectives.',
            'book_type' => '2',
            'book_img' => 'images_9.jpg',
        ]);

        DB::table('books')->insert([
            'book_name' => 'Atlas of dog Anatomy',
            'book_price' => '170',
            'book_details' => ' Netters Atlas of dog Anatomy is the physicians, providing clear-cut views of the human body along with clinical perspectives.',
            'book_type' => '3',
            'book_img' => 'images_10.jpg',
        ]);

        
    }
}
