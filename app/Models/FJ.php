<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FJ extends Model
{
    use HasFactory;
    protected $table = 'FJ';
    protected $primaryKey = 'idFJ';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = ['idFJ'];
    protected $fillable = [
        'idFJ',
        'idPelanggan',
        'tglFJ',
        'subtotal',
        'diskon',
        'totalFaktur',
        'Pelanggan_idPelanggan'

    ];

    // Disable timestamps
    public $timestamps = false;
}
