<?php

namespace App\Models;

use Illuminate\Auth\Access\Gate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPK_Processing1 extends Model
{
    use HasFactory;
    protected $table = "spk_processing1";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = [
        'id',
        'id_proses',
        'jenis_proses',
        'nama_vendor',
        'jumlah',
        'harga_satuan',
        'harga_total',
        'harga_satuan_sebelumnya',
        'harga_total_sebelumnya',
        'status',
        'no_spk'
    ];
}
