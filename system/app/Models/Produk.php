<?php

namespace App\Models;

use App\Models\Traits\Attributes\ProdukAttributes;
use App\Models\Traits\Relations\ProdukRelations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Produk extends Model
{   

    use ProdukRelations, ProdukAttributes, HasFactory; 

    protected $table = 'produk';
    protected $casts = [
        'created_at'=> 'datetime',
        'updated_at'=> 'datetime',
        'berat' => 'decimal:2'
    ];

    
};
