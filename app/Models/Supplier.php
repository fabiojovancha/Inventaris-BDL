<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $table = 'supplier';
    protected $primaryKey = 'idSupplier';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = ['idSupplier'];
    protected $fillable = [
        'idSupplier',
        'namaSupplier',
        'alamat',
        'kota',
        'telepon',
    ];

    public $timestamps = false;
}
