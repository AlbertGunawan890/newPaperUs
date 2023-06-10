<?php

namespace App\Imports;

use App\Models\Supplier;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class SupplierImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Supplier([
            "id_supplier" => $row['id_supplier'],
            "nama_supplier" => $row['nama_supplier'],
            "npwp_supplier" => $row['npwp_supplier'],
            "alamat_supplier" => $row['alamat_supplier'],
            "provinsi_supplier" => $row['provinsi_supplier'],
            "kota_supplier" => $row['kota_supplier'],
            "kecamatan_supplier" => $row['kota_supplier'],
            "kelurahan_supplier" => $row['kelurahan_supplier'],
            "kodepos_supplier" => $row['kodepos_supplier'],
            "notelp_supplier" => $row['notelp_supplier'],
            "email_supplier" => $row['email_supplier'],
            "item" => $row['item'],
            "nama_bank" => $row['nama_bank'],
            "no_rekening" => $row['rekening']
        ]);
    }
}
