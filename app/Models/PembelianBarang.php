<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PembelianBarang extends Model
{
    use HasFactory;
    // use SoftDeletes;
    protected $table = "master_pembelianbarang";
    protected $primaryKey = "namabarang";
    public $timestamps = false;
    protected $fillable = [
        'tipebox',
        'namabarang',
        'jenisbarang',
        'supplier',
        'jumlah',
        'harga',
        'diskon',
        'nett'
    ];
    protected $keyType = 'string';
}
