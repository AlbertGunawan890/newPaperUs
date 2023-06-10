<?php

namespace App\Imports;

use App\Models\Vendor;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class VendorImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Vendor([
            "id_vendor" => $row['id_supplier'],
            "nama_vendor" => $row['nama_supplier'],
            "jenis_item" => $row['npwp_supplier'],
            "kategori_vendor" => $row['alamat_supplier'],
            "alamat_vendor" => $row['provinsi_supplier'],
            "kota_vendor" => $row['kota_supplier'],
            "kecamatan_vendor" => $row['kota_supplier'],
            "email_vendor" => $row['email_supplier'],
            "nama_bank" => $row['nama_bank'],
            "no_akun" => $row['no_akun'],
            "no_rekening" => $row['rekening'],
            "batasan_hutang" => $row['batasan_hutang'],
            "hutang_sekarang" => $row['hutang_sekarang'],
            "hutang_tersedia" => $row['hutang_teredia'],
            "sisa_hutang" => $row['sisa_hutang']
        ]);
    }
}
