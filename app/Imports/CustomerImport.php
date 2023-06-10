<?php

namespace App\Imports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CustomerImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Customer([
            "id_customer" => $row['id_customer'],
            "nama_customer" => $row['nama_customer'],
            "npwp_customer" => $row['npwp_customer'],
            "alamat_customer" => $row['alamat_customer'],
            "provinsi_customer" => $row['provinsi_customer'],
            "kota_customer" => $row['kota_customer'],
            "kecamatan_customer" => $row['kota_customer'],
            "kelurahan_customer" => $row['kelurahan_customer'],
            "kodepos_customer" => $row['kodepos_customer'],
            "notelp_customer" => $row['notelp_customer'],
            "nofax_customer" => $row['fax_customer'],
            "email_customer" => $row['email_customer'],
            "batasan_hutang" => $row['batasan_hutang'],
            "hutang_sekarang" => $row['hutang_sekarang'],
            "hutang_tersedia" => $row['hutang_teredia'],
            "no_rekening" => $row['no_rekening'],
            "metode_pembayaran" => $row['metode_pembayaran']
        ]);
    }
}
