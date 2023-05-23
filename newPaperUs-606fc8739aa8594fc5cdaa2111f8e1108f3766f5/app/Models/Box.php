<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Box extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "master_box";
    protected $primaryKey = "id_box";
    public $timestamps = true;
    protected $fillable = [
        'id_box',
        'nama_box',
        'tipe_box',
        'panjang_box',
        'lebar_box',
        'tinggi_box',
        'keterangan'
    ];
    protected $keyType = 'string';
}
