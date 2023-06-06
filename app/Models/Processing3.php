<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processing3 extends Model
{
    use HasFactory;
    protected $table = "processing3";
    protected $primaryKey = "id_proses3";
    public $timestamps = false;
    public $autoincrement = true;
    protected $fillable = [
        'id_penawaran',
        'nama_brand',
        'proses',
        'status'
    ];
}
