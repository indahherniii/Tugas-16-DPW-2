<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Provinsi;

class HomeController extends Controller
{

    function showBeranda(){
        return view ('beranda');
    }

    function showProduk(){
        return view ('produk');
    }

    function showKategori(){
        return view ('kategori');
    }

    function showUser(){
        return view ('user');
    }

    public function testCollection(){

        $list_bike = ['Honda', 'Yamaha', 'Kawasaki', 'Suzuki', 'Vespa', 'BMW', 'KTM'];
        $list_bike = collect($list_bike);
        $list_produk = Produk::all();

        // Sorting
        // Sort By Harga Terendah
        // dd($list_produk->sortBy('harga'));

        // Sort By Harga Tertinggi
        // // dd($list_produk->sortByDesc('harga'));


        // // Map
        // $map = $list_produk->map(function($item){
        //     echo "$item->nama <br>";
        // });

        // // Filter
        // $filtered = $list_produk->filter(function($item){
        //     return $item->harga < 100000;
        // });

        // dd($filtered);

        // // Sum, Max, Min, Avg
        // $sum = $list_produk->Max('harga');
        // dd($sum);

        $data['list'] = Produk::paginate(8);
        return view ('test-collection', $data);


        dd($list_bike, $list_produk);

    }

    function testAjax(){
        $data['list_provinsi'] = Provinsi::all();
        return view('test-ajax', $data);
    }
}