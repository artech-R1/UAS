<?php 
namespace App\Http\Controllers;

use App\Models\Provinsi;

class HomeController extends Controller {

    function showBeranda(){
        return view('admin.beranda');
        
    }
    function wilayah(){

        $data['list_provinsi'] = Provinsi::all();
        return view('admin.wilayah', $data);
        
    }
    function showProduk(){
        return view('admin.produk');

    }
    function showKategori(){
        return view('admin.kategori');

    }

  
}


?>