<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPK extends Model
{
    use HasFactory;
    protected $table = "master_spk";
    protected $primaryKey = "no_spk";
    public $timestamps = false;
    protected $fillable = [
        'no_spk',
        'id_penawaran',
        'pic',
        'jenis_box',
        'jum_produksi',
        'link_desain',
        'pisau',
        'plat'
    ];
    protected $keyType = 'string';


}
