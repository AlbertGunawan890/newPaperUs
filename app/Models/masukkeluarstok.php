<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class masukkeluarstok extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "master_stokbarang";
    protected $primaryKey = "namabarang";
    public $timestamps = true;
    protected $fillable = [
        'namabarang',
        'jenisbarang',
        'jumlahmasuk',
        'hargasatuan',
        'hargatotal',
        'lokasibarang',
        'keterangan',
        'tanggalmasuk'
    ];
    protected $keyType = 'string';
}
