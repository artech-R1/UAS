<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class UserProdukController extends Controller
{

    function index()
    {
        $data['list_produk'] = Produk::paginate(9);
        return view('users.beranda', $data);
    }

    function create()
    {
        return view('users.createProduk');
    }

    function store()
    {
        $produk = new Produk;
        $produk->nama = request('nama');
        // $produk->img = request('img');
        $produk->handleUpload();
        $produk->stok = request('stok');
        $produk->harga = request('harga');
        $produk->berat = request('berat');
        $produk->deskripsi = request('deskripsi');
        $produk->save();

        return redirect('produkUser')->with('success', 'Data berhasil disimpan');
    }

    function show($id)
    {
        $data['produkUser'] = Produk::find($id);
        return view('users.showProduk', $data);
    }

    function edit(Produk $produkUser)
    {
        $data['produkUser'] = $produkUser;
        return view('users.editProduk', $data);
    }

    function update(Produk $produkUser)
    {
        $produkUser->nama = request('nama');
        $produkUser->stok = request('stok');
        $produkUser->harga = request('harga');
        $produkUser->berat = request('berat');
        $produkUser->deskripsi = request('deskripsi');
        $produkUser->save();
        return redirect('produkUser')->with('warning', 'Data berhasil edit');;
    }

    function destroy(Produk $produkUser)
    {
        $produkUser->delete();
        return redirect('produkUser')->with('danger', 'Data berhasil hapus');;
    }
    function filter()
    {
        $nama = request('nama');
        $stok = explode(',', request('stok'));
        $nama1['nama'] = $nama;
        $stok1['stok'] = request('stok');
        $Hargamin['harga_min'] = $harga_min = request('harga_min');
        $Hargamax['harga_max'] = $harga_max = request('harga_max');
        $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->paginate(9);
        // $data['list_produk'] = Produk::wherein('stok', $stok)->get();
        // $data['list_produk'] = Produk::wherebetween('harga', [$harga_min, $harga_max])->get();



        return view('users.beranda', $data);
    }
}
