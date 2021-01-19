<?php

namespace App\Models;

class Provinsi extends Model
{
    protected $table = 'wilayah_provinsi';
    function kabupaten(){
        return $this->hasMany(Kabupaten::class, 'provinsi_id');
    }
};
