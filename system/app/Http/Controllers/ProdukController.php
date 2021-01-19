<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdukStoreRequest;
use App\Models\Produk;
use App\Models\Provinsi;

class ProdukController extends Controller
{

    function index()
    {
        $user = request()->user();
        $data['list_produk'] = $user->produk;
        return view('admin.produk', $data);
    }

    function create()
    {
        $data['list_provinsi'] = Provinsi::all();
        return view('admin.createProduk', $data);
        // function testAjax()
        // {
        //     $data['list_provinsi'] = Provinsi::all();
        //     return view('admin.testajax', $data);
    }
    // }

    function store(ProdukStoreRequest $request)
    {
        $produk = new Produk;
        $produk->id_user = request()->user()->id;
        $produk->nama = request('nama');
        $produk->provinsi = request('provinsi');
        $produk->kabupaten = request('kabupaten');
        $produk->kecamatan = request('kecamatan');
        $produk->desa = request('desa');
        // $produk->foto = request('foto');
        $produk->stok = request('stok');
        $produk->harga = request('harga');
        $produk->berat = request('berat');
        $produk->deskripsi = request('deskripsi');

        $produk->handleUploadFoto();
        $produk->save();
        return redirect('admin/produkAdmin')->with('success', 'Data berhasil disimpan');
    }

    function show(Produk $produkAdmin)
    {
        $data['produkAdmin'] = $produkAdmin;
        return view('admin.showProduk', $data);
    }

    function edit(Produk $produkAdmin)
    {
        $data['produkAdmin'] = $produkAdmin;
        return view('admin.editProduk', $data);
    }

    function update(Produk $produkAdmin)
    {
        $produkAdmin->nama = request('nama');
        $produkAdmin->stok = request('stok');
        $produkAdmin->provinsi = request('provinsi');
        $produkAdmin->kabupaten = request('kabupaten');
        $produkAdmin->kecamatan = request('kecamatan');
        $produkAdmin->desa = request('desa');
        $produkAdmin->harga = request('harga');
        $produkAdmin->berat = request('berat');
        $produkAdmin->deskripsi = request('deskripsi');
        $produkAdmin->handleDeleteFoto();
        $produkAdmin->handleUploadFoto();
        $produkAdmin->save();
        return redirect('admin/produkAdmin')->with('warning', 'Data berhasil edit');;
    }

    function destroy(Produk $produkAdmin)
    {
        $produkAdmin->handleDeleteFoto();
        $produkAdmin->delete();
        return redirect('admin/produkAdmin')->with('danger', 'Data berhasil hapus');;
    }

    function filter()
    {
        $nama = request('nama');
        $stok = explode(',', request('stok'));
        $nama1['nama'] = $nama;
        $stok1['stok'] = request('stok');
        $Hargamin['harga_min'] = $harga_min = request('harga_min');
        $Hargamax['harga_max'] = $harga_max = request('harga_max');
        $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->wherein('stok', $stok)->wherebetween('harga', [$harga_min, $harga_max])->get();
        // $data['list_produk'] = Produk::wherein('stok', $stok)->get();
        // $data['list_produk'] = Produk::wherebetween('harga', [$harga_min, $harga_max])->get();



        return view('admin.produk', $data);
    }
}
