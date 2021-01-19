<?php

namespace App\Models;

class Kecamatan extends Model
{
    protected $table = 'wilayah_kecamatan';

    function desa(){
        return $this->hasMany(Desa::class, 'kecamatan_id');
    }
    function kabupaten(){
        return $this->belongsTo(Kabupaten::class, 'kabupaten_id');
    }
};
