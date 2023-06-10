<?php

namespace App\Http\Controllers;

use App\Models\Box;
use Illuminate\Http\Request;
use App\Imports\BoxImport;
use Maatwebsite\Excel\Facades\Excel;

class BoxController extends Controller
{
    public function show()
    {
        $arrBox = Box::all();
        return view('masterbox', compact('arrBox'));
    }
    public function doAdd(Request $req)
    {
        $box = Box::withTrashed()->get();
        $ctr = 1;
        foreach($box as $b){
            $ctr = intval(substr($b->id_box, 2)) + 1;
        }
        if($ctr<10){
            $kode = "B00{$ctr}";
        }else if($ctr<100){
            $kode = "B0{$ctr}";
        }else{
            $kode = "B{$ctr}";
        }
        $req->validate(
            [
                "namabox" => 'required',
                "tipe_box" => 'required',
                "panjang" => 'required',
                "lebar" => 'required',
                "tinggi" => 'required',
            ],
            [
                "namabox.required" => "Nama Box harus di isi",
                "tipe_box.required" => "Tipe Box harus di isi",
                "panjang.required" => "Panjang harus di isi",
                "lebar.required" => "Lebar harus di isi",
                "tinggi.required" => "Tinggi harus di isi",
            ]
        );
        Box::create([
            'id_box' => $kode,
            'nama_box'=>$req->namabox,
            'tipe_box'=>$req->tipe_box,
            'panjang_box'=>$req->panjang,
            'lebar_box'=>$req->lebar,
            'tinggi_box'=>$req->tinggi,
            'keterangan'=>$req->keterangan
        ]);
        return redirect("/masterbox");
    }
    public function delete($id)
    {
        $box = Box::withTrashed()->find($id);
        if($box->trashed()){
            $result = $box->restore();
        }else{
            $result = $box->delete();
        }
        if ($result){
            return redirect('/masterbox');
        } else {
            return redirect('/masterbox');
        }
    }

    public function doEdit(Request $req)
    {
        $req->validate(
            [
                "tipe_box" => "required",
                "namabox" => "required",
                "panjang" => "required",
                "lebar" => "required",
                "tinggi" => "required",
            ],
            [
                "tipe_box.required" => 'Tipe Box Harus Terisi',
                "namabox.required" => 'Nama Box Harus Terisi',
                "panjang.required" => 'Panjang Box Harus Terisi',
                "lebar.required"=> 'Lebar Box Harus Terisi',
                "tinggi.required"=> 'Tinggi Box Harus Terisi',
            ]
        );

        $box = Box::withTrashed()->find($req->id_box);
        $res = $box->update([
            "tipe_box" => $req->tipe_box,
            "nama_box" => $req->namabox,
            "panjang_box" => $req->panjang,
            "lebar_box" => $req->lebar,
            "tinggi_box" => $req->tinggi
        ]);
        if($res){
        return redirect("/masterbox");
        }else{
            return redirect("/masterbox");
        }

    }
    public function uploadUsers(Request $request)
    {
          // validasi
            $this->validate($request, [
                'file' => 'required|mimes:csv,xls,xlsx'
            ]);

            // menangkap file excel
            $file = $request->file('file');

            // membuat nama file unik
            $nama_file = rand().$file->getClientOriginalName();

            // upload ke folder file_siswa di dalam folder public
            $file->move('fileImport',$nama_file);

            // import data
            Excel::import(new BoxImport, public_path('/fileImport/'.$nama_file));

            // alihkan halaman kembali
            return redirect('/masterbox');
    }
}
