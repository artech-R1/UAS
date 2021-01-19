<?php

namespace App\Models;

class Desa extends Model
{
    protected $table = 'wilayah_desa';
    function kecamatan(){
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id');
    }
    
};
