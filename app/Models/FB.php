<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FB extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'FB';
    protected $primaryKey = 'idFB';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = ['idFB'];
    protected $fillable = [
        'idFB',
        'idSupplier',
        'tglFB',
        'subtotal',
        'diskon',
        'totalFaktur',
    ];

    // Disable timestamps
    public $timestamps = false;
}
