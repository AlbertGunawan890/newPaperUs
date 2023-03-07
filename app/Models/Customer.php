<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "master_customer";
    protected $primaryKey = "id_customer";
    public $timestamps = true;
    protected $fillable = [
        'id_customer',
        'nama_customer',
        'npwp_customer',
        'alamat_customer',
        'provinsi_customer',
        'kota_customer',
        'kecamatan_customer',
        'kelurahan_customer',
        'kodepos_customer',
        'notelp_customer',
        'nofax_customer',
        'email_customer',
        'batasan_hutang',
        'hutang_sekarang',
        'hutang_tersedia',
        'no_rekening',
        'metode_pembayaran'
    ];
    protected $keyType = 'string';
}
