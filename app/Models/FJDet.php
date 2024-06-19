<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FJDet extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'FJDet';
    protected $primaryKey = 'idFJ';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = ['idFJ'];
    protected $fillable = [
        'idFJ',
        'idBarang',
        'jumlah',
        'hargaJual',
        'Barang_idBarang',
        'FJ_idFJ',
    ];
    public $timestamps = false;
}
