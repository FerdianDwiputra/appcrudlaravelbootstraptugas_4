<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_produk',
        'harga',
        'stok',
        'deskripsi',
    ];

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d F Y');
    }
}
