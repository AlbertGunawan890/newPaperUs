<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processing1 extends Model
{
    use HasFactory;
    protected $table = "processing1";
    protected $primaryKey = "id_proses1";
    public $timestamps = false;
    public $autoincrement = true;
    protected $fillable = [
        'id_penawaran',
        'nama_brand',
        'proses',
        'status'
    ];
}
