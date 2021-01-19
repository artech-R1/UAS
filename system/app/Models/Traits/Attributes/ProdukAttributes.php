<?php

namespace App\Models\Traits\Attributes;
use Illuminate\Support\Str;
use App\Models\Produk;

trait ProdukAttributes{

    function getHarga(){
        return 'Rp. '.number_format($this->harga);
    }

    function getTanggal(){
        $tanggal = $this->cerated_at;
        return strftime("%d %b %Y", strtotime($tanggal));
    }

    function handleUploadFoto(){
  
        if(request()->hasFile("foto")){
          
            $foto = request()->file("foto");
            $destination = '/img';
            $randomStr = Str::random(5);
            $fileName = $this->id."-".time()."-".$randomStr.".".$foto->extension();
            $url = $foto->storeAs($destination,$fileName);
            $this->foto = "app/".$url;
            $this->save();
        }
    }
     function handleDeleteFoto(){
         $foto = $this->foto;
         $path = public_path($foto);
        // dd($path, file_exists($path));
        if(file_exists($path)){
            unlink($path);
        }
        return true;
     }
     

    
}


