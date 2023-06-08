<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengiriman extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "master_pengiriman";
    protected $primaryKey = "no_spk";
    public $timestamps = true;
    protected $fillable = [
        'no_spk',
        'no_surat_jalan',
        'no_kendaraan',
        'nama_pengiriman',
        'nama_penerima',
        'alamat_penerima',
        'qty',
        'tanggal',
        'status_pengiriman'
    ];
    protected $keyType = 'string';
}
