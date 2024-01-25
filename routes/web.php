<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $produk	=	App\Produk::all();
    foreach($produk	as	$data){
        echo $data->id_produk.".".
            $data->nama_produk."-"	.
            $data->harga_jual."<br>";
    }
    // return view('welcome');
});
