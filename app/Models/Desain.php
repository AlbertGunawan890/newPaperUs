<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desain extends Model
{
    use HasFactory;
    protected $table = "master_desain";
    protected $primaryKey = "id_desain";
    public $timestamps = false;
    protected $fillable = [
        'id_desain',
        'id_penawaran',
        'pic',
        'jenis_box',
        'link_desain',
        'pisau',
        'plat',
        'status_desain'
    ];
    protected $keyType = 'string';
}
