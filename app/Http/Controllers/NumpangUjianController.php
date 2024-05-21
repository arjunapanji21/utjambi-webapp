<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use App\Models\PesertaUjian;
use App\Models\WilayahUjian;
use Illuminate\Http\Request;
use stdClass;

class NumpangUjianController extends Controller
{
    public function form_numpang_ujian(Request $request){
        $mahasiswa = null;
        $utdaerah = [];
        foreach(WilayahUjian::all()->groupBy('kode_upbjj') as $row){
            array_push($utdaerah, ['kode_upbjj' => $row[0]->kode_upbjj, 'nama_upbjj' => $row[0]->nama_upbjj]);
        }
        if($request->has('nim')){
            $data = $request->validate([
                'nim' => 'required',
                'ut_daerah_tujuan' => 'required',
            ]);
            $mahasiswa = PesertaUjian::where('nim', $request['nim'])->get();
            $wilayah_ujian = WilayahUjian::where('kode_upbjj', $request['ut_daerah_tujuan'])->get();
        }
        if(!empty($mahasiswa)){
            $mk = [];
            foreach($mahasiswa as $row){
                if(Matakuliah::where('kode', $row['kode_mk'])->get()->first()->skema == "UTM"){
                    array_push($mk, $row['kode_mk']." / ".$row['nama_mk']);
                }
            }
            $data = new stdClass();
            $data->nim = $mahasiswa[0]->nim;
            $data->nama = $mahasiswa[0]->nama_mhs;
            $data->prodi = $mahasiswa[0]->prodi;
            $data->kabko = $mahasiswa[0]->kabko;
            $data->upbjj = "17 / UT Jambi";
            $data->tpu = $mahasiswa[0]->kode_tpu ." / ".$mahasiswa[0]->nama_tpu;
            $data->mk = $mk;

            $master = [
                'title' => 'Form Numpang Ujian | UT Jambi',
                'mahasiswa' => $data,
                'ut_daerah_tujuan' => $request['ut_daerah_tujuan'],
                'wilayah_ujian' => $wilayah_ujian,
            ];

            return view('forms.form_numpang_ujian', $master);
        }else{
            $master = [
                'title' => 'Form Numpang Ujian | UT Jambi',
                'ut_daerah_tujuan' => $utdaerah,
            ];
            return view('forms.form_numpang_ujian', $master);
        }
    }
}
