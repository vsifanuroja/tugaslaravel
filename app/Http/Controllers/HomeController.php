<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

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

    public function store3(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric|min:2',
            'stok' => 'required|integer|min:50',
            'deskripsi' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $product = new Product();
        $product->nama = $request->nama;
        $product->harga = $request->harga;
        $product->stok = $request->stok;
        $product->deskripsi = $request->deskripsi;
        $product->save();

        return redirect('/show');
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

      public function edit($id){
        $Products= Product::findOrFail($id);


        return view ("editProduct",compact("Products"));
      }

public function update (Request $request, $id) {

$Product = Product::findOrFail($id);

$Product->nama = $request->nama;
$Product->harga = $request->harga;
$Product->stok = $request->stok;
$Product->deskripsi = $request->deskripsi;
$Product->save();

return redirect('/show');

}

public function destroy($id){ $Product = Product::findOrFail ($id);
$Product->delete();

return redirect('/show');
}

    public function show()
    {
        $Products = Product::Paginate(3);
        return view('tableproduct', compact('Products'));
    }

   public function input() {
    return view("inputProduct");
}

}
