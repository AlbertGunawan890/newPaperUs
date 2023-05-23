<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pembayaran extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "master_pembayaran";
    protected $primaryKey = "id_pembayaran";
    public $timestamps = true;
    protected $fillable = [
        'id_pembayaran',
        'id_penawaran',
        'nama_brand',
        'pic',
        'jenis_box',
        'qty',
        'jum_produksi',
        'harga',
        'pembayaran',
        'sisa',
        'termin',
        'status_pembayaran'
    ];
    protected $keyType = 'string';
}
