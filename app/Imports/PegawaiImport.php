<?php

namespace App\Imports;

use App\Models\Pegawai;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PegawaiImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pegawai([
            "id_pegawai" => $row['id_pegawai'],
            "nama_pegawai" => $row['nama_pegawai'],
            "npwp_pegawai" => $row['npwp_pegawai'],
            "alamat_pegawai" => $row['alamat_pegawai'],
            "provinsi_pegawai" => $row['provinsi_pegawai'],
            "kota_pegawai" => $row['kota_pegawai'],
            "kecamatan_pegawai" => $row['kota_pegawai'],
            "kelurahan_pegawai" => $row['kelurahan_pegawai'],
            "kodepos_pegawai" => $row['kodepos_pegawai'],
            "notelp_pegawai" => $row['notelp_pegawai'],
            "fax_pegawai" => $row['fax_pegawai'],
            "email_pegawai" => $row['email_pegawai'],
            "kontak_personal" => $row['kontak_personal'],
            "password" => $row['password'] = Hash::make($row['password'])
        ]);
    }
}
