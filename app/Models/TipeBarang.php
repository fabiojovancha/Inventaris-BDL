<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeBarang extends Model
{
    use HasFactory;
    protected $table = 'tipebarang';
    public $incrementing = false;
    public $timestamps = false;
    protected $primaryKey = 'idTipeBarang';
    protected $fillable = [
        'idTipeBarang',
        'tipeBarang',
    ];
}
