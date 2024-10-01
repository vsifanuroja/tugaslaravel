<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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

    public function form(Request $request) {
        // Ambil data message dari request
        $dataMessage = $request->message;

        // Simpan data ke session
        $request->session()->put('message', $dataMessage);

        // Redirect ke halaman home
        return redirect('/book');
    }

    public function store3(){
        $Product = new Product();
        $Product->nama = "Samsung Galaxy Z Fold6";
        $Product->harga = 26-499-000;
        $Product->stok = 6;
        $Product->deskripsi ="Hp samsung";
        $Product->save();
        return "data sukses dikirim";
    }


    public function store9(){
        $Product = new Product();
        $Product->nama = "Samsung Galaxy A 06";
        $Product->harga = 1499000;
        $Product->stok = 6;
        $Product->deskripsi ="Hp samsung";
        $Product->save();
        return "data sukses dikirim";
    }


    public function store8(){
        $Product = new Product();
        $Product->nama = "Samsung Galaxy A05";
        $Product->harga = 1599000;
        $Product->stok = 2;
        $Product->deskripsi ="Hp samsung";
        $Product->save();
        return "data sukses dikirim";
    }

      public function store7(){
        $Product = new Product();
        $Product->nama = "IPHONE 16 PRO MAX";
        $Product->harga = 24999000;
        $Product->stok = 69;
        $Product->deskripsi ="IPHONE";
        $Product->save();
        return "data sukses dikirim";
    }


    public function show()
    {
        $Products = Product::all();
        return view('tableproduct', compact('Products')); 
    }
}
