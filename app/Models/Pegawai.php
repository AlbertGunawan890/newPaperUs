<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pegawai extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "master_pegawai";
    protected $primaryKey = "id_pegawai";
    public $timestamps = true;
    protected $fillable = [
        'id_pegawai',
        'nama_pegawai',
        'npwp_pegawai',
        'alamat_pegawai',
        'provinsi_pegawai',
        'kota_pegawai',
        'kecamatan_pegawai',
        'kelurahan_pegawai',
        'kodepos_pegawai',
        'notelp_pegawai',
        'fax_pegawai',
        'email_pegawai',
        'kontak_personal',
        'password',
        'role'
    ];
    protected $keyType = 'string';
}
