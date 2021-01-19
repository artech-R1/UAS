<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukResource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_produk = Produk::all();
        return $list_produk->toJson();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        if(request('nama') and request('harga') and request('berat') and request('stok')  and request('deskripsi')){
                $produk = new Produk;
                $produk->nama = request('nama');
                $produk->harga = request('harga');
                $produk->berat = request('berat');
                $produk->stok = request('stok');
                $produk->deskripsi = request('deskripsi');
                $produk->save();

                return collect([
                    'respon' => 200,
                    'data' => $produk
                ]);

        } else {
        return collect([
            'respond' => 500,
            'message' => 'Field yang ada kosong'
        ]);
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::find($id);
        if($produk){
            return collect([
                'respon' => 200,
                'data' => $produk
            ]);
    }
    return collect([
        'respond' => 500,
        'message' => 'Produk tidak ada'
    ]);
}
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $produk = Produk::find($id);
        if($produk){
           
            if(request('nama')) $produk->nama = request('nama');
           if(request('harga')) $produk->harga = request('harga');
           if(request('berat')) $produk->berat = request('berat');
           if(request('stok')) $produk->stok = request('stok');
           if(request('deskripsi')) $produk->deskripsi = request('deskripsi');
            $produk->save();

            return collect([
                'respon' => 200,
                'data' => $produk
            ]);
    }
    return collect([
        'respond' => 500,
        'message' => 'Produk tidak ada'
    ]);
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::find($id);
        if($produk){
            $produk->delete();
            return collect([
                'respon' => 200,
                'data' => 'berhasil di hapus'
            ]);
    }
    return collect([
        'respond' => 500,
        'message' => 'Produk tidak ada'
    ]);
    }
}
