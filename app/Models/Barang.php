<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    // protected$primerykey = 'Slug';
    protected $table = 'barang';
    protected $primaryKey = 'idBarang';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = ['idBarang'];
    protected $fillable = [
        'idBarang',
        'namaBarang',
        'idTipeBarang',
        'TipeBarang_idTipeBarang',
        'jumlah',
        'hargaBeli',
        'hargaJual',
    ];

    // Disable timestamps
    public $timestamps = false;
}
