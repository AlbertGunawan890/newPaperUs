<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vendor extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "master_vendor";
    protected $primaryKey = "id_vendor";
    public $timestamps = true;
    protected $fillable = [
        'id_vendor',
        'nama_vendor',
        'jenis_item',
        'kategori_vendor',
        'alamat_vendor',
        'kota_vendor',
        'kecamatan_vendor',
        'kelurahan_vendor',
        'email_vendor',
        'nama_bank',
        'no_akun',
        'no_rekening',
        'batasan_hutang',
        'hutang_sekarang',
        'hutang_tersedia',
        'sisa_hutang',
        'metode_pembayaran'
    ];
    protected $keyType = 'string';
}
