<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class masukkeluarstok extends Model
{
    use HasFactory;
    protected $table = "master_stokbarang";
    protected $primaryKey = "namabarang";
    public $timestamps = false;
    protected $fillable = [
        'namabarang',
        'jenisbarang',
        'jumlahmasuk',
        'hargasatuan',
        'hargatotal',
        'lokasibarang',
        'keterangan'
    ];
    protected $keyType = 'string';
}
