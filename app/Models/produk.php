<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected$table='produk';
    protected$primaryKey='id_produk';
    protected$fillable=['nama_produk','harga_jual'];
}
