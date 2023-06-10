<?php

namespace App\Imports;

use App\Models\Box;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BoxImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Box([
            "id_box" => $row['id_box'],
            "tipe_box" => $row['tipe_box'],
            "nama_box" => $row['nama_box'],
            "panjang_box" => $row['panjang_box'],
            "lebar_box" => $row['lebar_box'],
            "tinggi_box" => $row['tinggi_box'],
            "keterangan" => $row['keterangan']
        ]);
    }
}
