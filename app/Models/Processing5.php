<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processing5 extends Model
{
    use HasFactory;
    protected $table = "processing5";
    protected $primaryKey = "id_proses5";
    public $timestamps = false;
    public $autoincrement = true;
    protected $fillable = [
        'id_penawaran',
        'nama_brand',
        'proses',
        'status'
    ];
}
