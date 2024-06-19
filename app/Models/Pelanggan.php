<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'Pelanggan';
    protected $primaryKey = 'idPelanggan';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = ['idPelanggan'];
    protected $fillable = [
        'idPelanggan',
        'namaPelanggan',
        'alamatPelanggan',
        'telepon',
    ];
    public $timestamps = false;
}
