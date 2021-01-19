<?php

namespace App\Http\Controllers;

use App\Models\Kategori;

class KategoriController extends Controller
{

    function index()
    {
        $data['list_Kategori'] = Kategori::all();
        return view('admin.kategori', $data);
    }

    function create()
    {
        return view('admin.createKategori');
    }

    function store()
    {
        $Kategori = new Kategori;
        $Kategori->nama = request('nama');
        $Kategori->brand = request('brand');
        $Kategori->beratbersih = request('beratbersih');
        $Kategori->hargamin = request('hargamin');

        $Kategori->save();
        return redirect('admin/kategoriAdmin')->with('success', 'Data berhasil disimpan');
    }

    function show(Kategori $kategoriAdmin)
    {
        $data['kategoriAdmin'] = $kategoriAdmin;
        return view('admin.showKategori', $data);
    }

    function edit(Kategori $kategoriAdmin)
    {
        $data['kategoriAdmin'] = $kategoriAdmin;
        return view('admin.editKategori', $data);
    }

    function update(Kategori $kategoriAdmin)
    {

        $kategoriAdmin->nama = request('nama');
        $kategoriAdmin->brand = request('brand');
        $kategoriAdmin->beratbersih = request('beratbersih');
        $kategoriAdmin->hargamin = request('hargamin');
        $kategoriAdmin->save();
        return redirect('admin/kategoriAdmin')->with('warning', 'Data berhasil edit');;
    }

    function destroy(Kategori $kategoriAdmin)
    {
        $kategoriAdmin->delete();
        return redirect('admin/kategoriAdmin')->with('danger', 'Data berhasil hapus');;
    }
    function filter()
    {
        $nama = request('nama');
        $brand = explode(',', request('brand'));
        $nama1['nama'] = $nama;
        $brand1['brand'] = request('brand');
        $Hargamin['harga_min'] = $harga_min = request('harga_min');
        $Hargamax['harga_max'] = $harga_max = request('harga_max');
        $data['list_Kategori'] = Kategori::where('nama', 'like', "%$nama%")->wherein('brand', $brand)->wherebetween('hargamin', [$harga_min, $harga_max])->get();
        // $data['list_produk'] = Produk::wherein('brand', $brand)->get();
        // $data['list_produk'] = Produk::wherebetween('harga', [$harga_min, $harga_max])->get();



        return view('admin.kategori', $data);
    }
}
