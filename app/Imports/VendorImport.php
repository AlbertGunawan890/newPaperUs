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
            "id_vendor" => $row['id_vendor'],
            "nama_vendor" => $row['nama_vendor'],
            "jenis_item" => $row['jenis_item'],
            "kategori_vendor" => $row['kategori_vendor'],
            "alamat_vendor" => $row['alamat_vendor'],
            "kota_vendor" => $row['kota_vendor'],
            "kecamatan_vendor" => $row['kecamatan_vendor'],
            "kelurahan_vendor" => $row['kelurahan_vendor'],
            "email_vendor" => $row['email_vendor'],
            "nama_bank" => $row['nama_bank'],
            "no_akun" => $row['no_akun'],
            "no_rekening" => $row['no_rekening'],
            "batasan_hutang" => $row['batasan_hutang'],
            "hutang_sekarang" => $row['hutang_sekarang'],
            "hutang_tersedia" => $row['hutang_tersedia'],
            "sisa_hutang" => $row['sisa_hutang'],
            "metode_pembayaran" => $row['metode_pembayaran']
        ]);
    }
}
