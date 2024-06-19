<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FBDet extends Model
{
    use HasFactory;
    use HasFactory;
    use HasFactory;
    protected $table = 'FBDet';
    protected $primaryKey = 'idFB';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = ['idFB'];
    protected $fillable = [
        'idFB',
        'idBarang',
        'jumlah',
        'hargaJual',
        'Barang_idBarang',
        'FB_idFB',
    ];
    public $timestamps = false;
}
