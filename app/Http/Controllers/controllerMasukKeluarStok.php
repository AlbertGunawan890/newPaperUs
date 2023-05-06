<?php

namespace App\Http\Controllers;
use App\Models\masukkeluarstok;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class controllerMasukKeluarStok extends Controller
{
    public function showmasuk()
    {
        $arrbarangmasuk = masukkeluarstok::all();
        return view("barangmasuk",compact('arrbarangmasuk'));
    }
    public function showkeluar()
    {
        return view ("barangkeluar");
    }
    public function doaddmasuk(Request $req)
    {

        $tanggalsekarang = new DateTime();

        $req->validate(
            [
                "tnama" => 'required',
                "tjenisbarang" => 'required',
                "tjumlah" => 'required',
                "tjumlahsatuan" => 'required',
                "tjumlahtotal" => 'required',
                "tlokasi" => 'required',
                "tketerangan" => 'required',
                "tanggalsekarang" => 'required',
            ],
            [
                "tnama.required" => "Nama Barang harus di isi",
                "tjenisbarang.required" => "Jenis Barang harus di isi",
                "tjumlah.required" => "Jumlah Masuk harus di isi",
                "tjumlahsatuan.required" => "Harga Satuan harus di isi",
                "tjumlahtotal.required" => "Harga Total harus di isi",
                "tlokasi.required" => "Lokasi harus di isi",
                "tketerangan.required" => "Keterangan harus di isi",
                "tanggalsekarang.required" => "Nett harus di isi",
            ]
        );

        masukkeluarstok::create([
            'namabarang' => $req->tnama,
            'jenisbarang' => $req->tjenisbarang,
            'jumlahmasuk' => $req->tjumlah,
            'hargasatuan' => $req->tjumlahsatuan,
            'hargatotal' => $req->tjumlahtotal,
            'lokasibarang' => $req->tlokasi,
            'keterangan' => $req->tketerangan,
            'tanggalmasuk' => $tanggalsekarang
        ]);
        return redirect("/arusbarang");
    }

}
