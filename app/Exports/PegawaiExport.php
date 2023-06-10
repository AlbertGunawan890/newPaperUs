<?php

namespace App\Exports;

use App\Models\Pegawai;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PegawaiExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pegawai::select("id_pegawai", "nama_pegawai", "npwp_pegawai", "alamat_pegawai", "kodepos_pegawai", "notelp_pegawai", "email_pegawai")->get()->sortBy("id_pegawai");
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return ["ID", "Nama", "NPWP", "Alamat", "Kode Pos", "No Telpone", "Emai"];
    }
}
