<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penagihan extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "master_penagihan";
    protected $primaryKey = "id_penagihan";
    public $timestamps = true;
    protected $fillable = [
        'id_penagihan',
        'id_penawaran',
        'pic',
        'jenis_box',
        'jumlah',
        'nominal',
        'sudah_terbayar',
        'sisa_hutang',
        'jumlah_bayar',
        'status_penagihan'
    ];
    protected $keyType = 'string';
}
