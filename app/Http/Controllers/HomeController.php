<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        // Buat array berisi data buku
        $books = [
            ["title" => "Cantik Itu Luka", "author" => "Eka Kurniawan", "year" => 2002],
            ["title" => "Bibi Gill", "author" => "Tere Liye", "year" => 2022],
            ["title" => "Hujan", "author" => "Tere Liye", "year" => 2016],
            ["title" => "Laut Bercerita", "author" => "Leila S. Chudori", "year" => 2017],
            ["title" => "Dikta&Hukum", "author" => "Dhia'an Farah", "year" => 2021],
        ];

        // Mengirimkan data ke view dengan compact
        return view('home', ['books' => $books]);
    }
}
