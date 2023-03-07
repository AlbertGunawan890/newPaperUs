<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "master_supplier";
    protected $primaryKey = "id_supplier";
    public $timestamps = true;
    protected $fillable = [
        'id_supplier',
        'nama_supplier',
        'npwp_supplier',
        'alamat_supplier',
        'provinsi_supplier',
        'kota_supplier',
        'kecamatan_supplier',
        'kelurahan_supplier',
        'kodepos_supplier',
        'notelp_supplier',
        'email_supplier',
        'item',
        'nama_bank',
        'no_rekening'
    ];
    protected $keyType = 'string';
}
