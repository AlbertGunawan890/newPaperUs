<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penawaran extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "master_penawaran";
    protected $primaryKey = "id_penawaran";
    public $timestamps = true;
    protected $fillable = [
        'id_penawaran',
        'nama_brand',
        'pic',
        'jenis_box',
        'panjang',
        'lebar',
        'tinggi',
        'qty',
        'jum_produksi',
        'harga_satuan',
        'harga_satuan_terakhir',
        'diskon',
        'net',
        'harga_net_terakhir',
        'status_penawaran'
    ];
    protected $keyType = 'string';
}
