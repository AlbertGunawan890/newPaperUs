<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processing2 extends Model
{
    use HasFactory;
    protected $table = "processing2";
    protected $primaryKey = "id_proses2";
    public $timestamps = false;
    public $autoincrement = true;
    protected $fillable = [
        'id_penawaran',
        'nama_brand',
        'proses',
        'status'
    ];
}
