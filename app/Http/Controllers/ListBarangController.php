<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListBarangController extends Controller
{
    public function getData()
    {
        // Logika untuk mendapatkan array data
        $dataBarang = [
            ['id' => 1, 'nama' => 'Penyedap Royco', 'harga' => 3200],
            ['id' => 2, 'nama' => 'Minyak Goreng', 'harga' => 14000],
            ['id' => 3, 'nama' => 'Beras Pandan Wangi', 'harga' => 15000],
            ['id' => 4, 'nama' => 'Tepung Terigu', 'harga' => 20000],
            ['id' => 5, 'nama' => 'Baygon Cair', 'harga' => 13500]
        ];
        return $dataBarang;
    }

    public function tampilkan()
    {
        $data = $this->getData();
        return view('list_barang', compact('data'));
    }
}
